<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="bg-transparent text-dark">
  <div class="w-50 container my-3">
    <main class="form-signin">
      <form action="<?php echo 'Pages/login' ?>" method="POST">
        <h1 class="h3 mb-3 fw-normal text-danger">Please sign in</h1>

        <div class="mb-2 form-floating">
          <label class="mb-1" for="floatingInput">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3 form-floating">
          <label class="mb-1" for="floatingPassword">Password</label>
          <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-10 btn btn-lg btn btn-info" type="submit">Sign in</button>
      </form>
    </main>

</body>

</html>