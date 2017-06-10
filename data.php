<?php
    include('connection.php');
  $sql = "SELECT * FROM questions";
  $query = mysqli_query($db, $sql);
  $arr = array();
  while ($row = mysqli_fetch_assoc($query)) {
    $id = $row['id'];
    $text = $row['text'];
    $option1 = $row['option1'];
    $option2 = $row['option2'];
    $option3 = $row['option3'];
    $option4 = $row['option4'];
    $answer = $row['answer'];
    $category = $row['category'];
    $points = $row['points'];
    $arr[] = ['id'=>$id, 'text'=>$text, 'options'=>[$option1, $option2, $option3, $option4], 'answer'=>$answer, 'category'=>$category, 'points'=>$points];
  }
 $jsonformat = json_encode($arr);
 echo $jsonformat;
