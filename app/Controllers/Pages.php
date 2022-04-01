<?php

namespace App\Controllers;

use App\Models\User;

class Pages extends BaseController
{
    public function index()
    {
        echo view('Templates/header.php');
        echo view('Pages/home.php');
        echo view('Templates/footer.php');

        // echo "These is default method for pages controller.";
        // return view('welcome_message');
    }

    public function showme($pages = 'Home')
    {

        if (!is_file(APPPATH . '/Views/Pages/' . $pages . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($pages);
        }

        echo view('Templates/header.php');
        echo view('Pages/' . $pages);
        echo view('Templates/footer.php');
        // echo "This is $pages";
    }

    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function login()
    {

        $session = session();

        $user = new User();

        $res = $user->where('email', $this->request->getVar('email'))->where('password', $this->request->getVar('pass'))->first();

        if ($res != null) {

            $session->set('uname', $res['fname']);
            // echo "<h2> Wel come ".$res['fname'];
            $user = new User();
            $data['user'] = $user->findAll();
            echo view("list", $data);
            return view('button.php');
        } else {
            return view("Pages/login");
        }
    }

    public function insert()
    {

        $validation = \Config\Services::validation();

        $rules = $this->validate([

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|valid_email|is_unique[user.email]',
            'pass' => 'required',

        ]);

        if (!$rules) {
            //send back to same form with errors.

            $data['validation'] = $this->validator;
            return view("Pages/register", $data);
        } else {

            $file = $this->request->getFile('pic');
            $fname = $file->getName();
            $fsize = $file->getSize();
            // echo $file->getMimeType();
            $fExt = $file->guessExtension();
            $tname = $file->getTempName();
            $newName = $file->getRandomName();

            $file->move('./upload', $newName);

            $data = [
                'fname' => $this->request->getVar('fname'),
                'lname' => $this->request->getVar('lname'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('pass'),
                'pic' => $newName
            ];

            $user = new User();
            $user->insert($data);
            $data['user'] = $user->findAll();
            return view("list", $data);
        }

        //request class

        // $data = ['fname' => $this->request->getVar('fname'),
        //          'lname' => $this->request->getVar('lname'),
        //          'email' => $this->request->getVar('email'),
        //          'password' => $this->request->getVar('pass')];

        //query builder

        // $db = \Config\Database::connect();
        // $qry = $db->table('user');
        // $qry->insert($data);

        // $model = new User();
        // $model->insert($data);
    }

    public function data()
    {
        $session = session();
        if (isset($session->uname)) {
            $user = new User();
            $data['user'] = $user->findAll();
            return view("list", $data);
        } else {
            return redirect()->to("http://localhost/c4/login");
        }
    }

    // public function demo()
    // {
    //     return view('Done Message');
    // }
    // \

    public function edit($id)
    {
        $user = new User();
        $data['user'] = $user->where('id', $id)->first();
        return view("Pages/edit", $data);
    }

    public function update()
    {

        $user = new User();
        $id = $this->request->getVar('id');

        $data = [
            'fname' => $this->request->getVar('fname'),
            'lname' => $this->request->getVar('lname'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('pass')
        ];

        $user->update($id, $data);

        return redirect()->to("http://localhost/c4/data");
    }

    public function delete($id = null)
    {

        $user = new User();

        $data['user'] = $user->where('id', $id)->delete();

        return redirect()->to("http://localhost/c4/data");
    }

    public function logout()
    {
        $session = session();

        $user = new User();

        $session->destroy($session->uname);

        return redirect()->to("http://localhost/c4/login");
        // echo view('Templates/header.php');
        // return view("Pages/login");
        // echo view('Templates/footer.php');
    }
}
