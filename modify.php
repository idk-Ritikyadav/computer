


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Your Detail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
</head>
<body>


<div class="">

    <div class="form-title">
    <h2>Create Form</h2>
    
    
    </div>
 
    <p style="color:red">
     <?php
  $conn = mysqli_connect("localhost", "root", "", "school");

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_GET['id']) or isset($_GET['username'])) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM userdetails WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }
  }
  ?>
</p><form action="update-script.php" method="post">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="stream">Stream:</label>
    <input type="text" class="form-control" id="stream" name="stream" value="<?php echo $row['stream']; ?>">
  </div>
  <div class="form-group">
    <label for="shift">Shift:</label>
    <input type="text" class="form-control" id="shift" name="shift" value="<?php echo $row['shift']; ?>">
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
  </div>
  <div class="form-group">
    <label for="year">Year:</label>
    <input type="text" class="form-control" id="year" name="year" value="<?php echo $row['year']; ?>">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']; ?>">
  </div>
  <?php if(!empty($msg)){echo $msg; }?> 
  <input type="submit" class="btn btn-primary" value="Update">
</form>


</body>
</html>