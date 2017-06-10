<?php
  include('connection.php');
  session_start();
  if ($_POST['submit'] && $_POST['username'] && $_POST['password']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id FROM admins WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($db, $sql);
  }
  if (mysqli_num_rows($query) === 1) {
    $logId = mysqli_fetch_assoc($query);
    $_SESSION['id'] = $logId['id'];
    header('Location: adminQuiz.php');
  }
  else {
    header('Location: login.php');
  }
