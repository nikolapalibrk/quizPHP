<?php
  include('connection.php');
  if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
    $category = $_POST['category'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO admins (username, password, category) VALUES ('$username', '$password', '$category')";
    $query = mysqli_query($db, $sql);
    header('Location: adminSuccess.php');
  }
  else {
    header('Location: addAdmin.php');
  }
