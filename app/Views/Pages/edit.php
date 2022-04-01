<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .spc {
      width: auto;
      margin-top: 30px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>

</head>

<body class="bg-transparent text-dark">
  <form class="spc" action="<?php echo base_url() . 'Pages/edit' ?>" method="POST">

    <h1 class="h3 mb-3 fw-normal text-danger">
      Hello <?php echo $user['fname']; ?> <?php echo $user['lname']; ?></h1>
    <h1 class="h3 mb-3 fw-normal text-danger">Edit Your Details</h1>

    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Your First Name</label>
      <div class="col-sm-10">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $user['fname']; ?>" name="fname">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Your Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $user['lname']; ?>" name="lname">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Your Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" value="<?php echo $user['email']; ?>" name="email">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Your Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputEmail3" value="<?php echo $user['password']; ?>" name="pass">
      </div>
    </div>
    <button class="w-10 btn btn-lg btn btn-info" name="submit" type="submit">Update</button>
  </form>
</body>

</html>