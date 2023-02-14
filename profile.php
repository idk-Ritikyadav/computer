<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <style>*{text-align: center;} a{text-decoration: none; font-size: 2rem;}li{display: inline-block;margin: 1rem;text-align: center;}</style>
</head>
<body>
    <?php 
    include('connection.php');

    ?>
    <h1>Profile</h1>
<nav>
<li><a href="./register.php"> Register</a></li>
<li><a href="./signin.php">Signin</a></li>
<li><a href="./profile.php">Profile</a></li>
<li><a href="./modify.php">Modify</a></li>
<li><a href="./info-form.php">Info</a></li></nav>
<div class="container">

  <table class="table table-bordered">
    <tbody>
      <tr>
        <td><strong>Name:</strong></td>
        <td><?php echo $_SESSION['name']; ?></td>
      </tr>
      <tr>
        <td><strong>Username:</strong></td>
        <td><?php echo $_SESSION['username']; ?></td>
      </tr>
      <tr>
        <td><strong>Address:</strong></td>
        <td><?php echo $_SESSION['address']; ?></td>
      </tr>
      <tr>
        <td><strong>Shift:</strong></td>
        <td><?php echo $_SESSION['shift']; ?></td>
      </tr>
      <tr>
        <td><strong>Stream:</strong></td>
        <td><?php echo $_SESSION['stream']; ?></td>
      </tr>
      <tr>
        <td><strong>Phone Number:</strong></td>
        <td><?php echo $_SESSION['phone']; ?></td>
      </tr>
      <tr>
        <td><strong>Year:</strong></td>
        <td><?php echo $_SESSION['year']; ?></td>
      </tr>
    </tbody>
  </table>
  <a href="edit.php?username=<?php echo $_SESSION['username']; ?>" class="btn btn-primary">Edit</a>
  <a href="logout.php" class="btn btn-danger">Logout</a>
</div>



</body>
</html>