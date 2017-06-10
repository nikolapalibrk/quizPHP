<?php
  include('connection.php');
  if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $answer = $_POST['answer'];
    $category = $_POST['category'];
    $points = $_POST['points'];
    $sql = "INSERT INTO questions (text, option1, option2, option3, option4, answer, category, points) VALUES ('$text', '$option1','$option2','$option3','$option4','$answer', '$category', '$points')";
    $query = mysqli_query($db, $sql);
    header('Location: questionSuccess.php');
  }
  else {
    header('Location: addQuestion.php');
  }
