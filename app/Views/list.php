<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <?php $session = session(); ?>
  <center>
    <h1 class="h2 mb-2 fw-normal text-normal">User-Lists</h1>
  </center>
  <div class="container my-2">
    <center>
      <h3 class="text-danger">Wel Come <?php echo $session->uname; ?></h3>
    </center>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Photo</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($user as $k) : ?>
          <tr>
            <td><?php echo $k['fname']; ?></td>
            <td><?php echo $k['lname']; ?></td>
            <td><?php echo $k['email']; ?></td>
            <td><img src="<?php echo 'http://localhost/c4/upload/' . $k['pic']; ?>" width="100px" height="100px"></td>
            <td><a href="<?php echo 'Pages/edit/' . $k['id']; ?>" class="btn btn-primary" name="edit">Edit</a></td>
            <td><a href="<?php echo 'Pages/delete/' . $k['id']; ?>" class="btn btn-danger" name="delete">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>