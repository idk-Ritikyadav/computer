<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>*{text-align: center;}
    .row{
        margin-top: 2rem;
    }
    a{text-decoration: none; font-size: 2rem;}li{display: inline-block;margin: 1rem;text-align: center;}</style>
</head>
<body>
<?php
include 'connection.php';
include ('register-script.php')

?>

    <h1>Register</h1>
<nav>
<li><a href="./register.php"> Register</a></li>
<li><a href="./signin.php">Signin</a></li>
<li><a href="./profile.php">Profile</a></li>
<li><a href="./modify.php">Modify</a></li>
<li><a href="./info-form.php">Info</a></li></nav>

<div class="container d-flex justify-content-center">
  <form action="" method="post" style="width:50%">
    <div class="form-group row">
      <label for="email" class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="username" class="col-sm-3 col-form-label">Username</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="username" id="username" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-3 col-form-label">Password</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password" id="password" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
        <p id="message" class="text-danger"></p>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
        <input type="submit" class="btn btn-primary" value="Signin">
      </div>
    </div>
  </form>
</div>




</body>
</html>