<?php
  session_start();
  if(!$_SESSION['id']){
    header('Location: login.php');
  }
 ?>

<!DOCTYPE html>
 <html lang="en">

   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/main.min.css">
   </head>

   <body id="adminBody">
      <nav>
        <a href="adminQuiz.php">Quiz App</a>
        <ul>
          <li><a href="addQuestion.php">Add Questions</a></li>
          <li><a href="addAdmin.php">Add Admin</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <div id="startScreen" class="wrapper text-center">
        <h2>Please choose your category</h2>
        <div class="category">All</div>
        <div class="category">Movies</div>
        <div class="category">Sport</div>
        <div class="category">History</div>
      </div>
      <div id="questionScreen" class="questions text-center">
          <h2 id="qText">Pitanje broj 1</h2>
          <div class="options">
            <button type="button" class="btn btn-default answerBtn" name="button">Odgovor1</button>
            <button type="button" class="btn btn-default answerBtn" name="button">Odgovor2</button>
            <button type="button" class="btn btn-default answerBtn" name="button">Odgovor3</button>
            <button type="button" class="btn btn-default answerBtn" name="button">Odgovor4</button>
          </div>
          <button type="button" id='confirm' name="button" class="btn btn-primary confirm">Confirm</button>
      </div>
      <div id="endScreen">
          <h2>kraj</h2>
      </div>

     <script src="main.js" charset="utf-8"></script>
   </body>
 </html>
