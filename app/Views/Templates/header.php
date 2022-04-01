<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .btn{
      margin-left: auto;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/c4/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/c4/feature">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/c4/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/c4/aboutus">AboutUs</a>
        </li>
      </ul>
      <div class="btn">
          <button type="button" class="btn btn-outline-light me-2" 
          onclick="window.location.href='/c4/login'">Login</button>
          <button type="button" class="btn btn-warning"
          onclick="window.location.href='/c4/register'">Sign-up</button>
        </div>
    </div>
  </div>
</nav>

</body>
</html>