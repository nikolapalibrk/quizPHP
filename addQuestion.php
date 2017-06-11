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
   <nav>
     <a href="adminQuiz.php">Quiz App</a>
     <ul>
       <li><a href="addQuestion.php">Add Questions</a></li>
       <li><a href="addAdmin.php">Add Admin</a></li>
       <li><a href="logout.php">Logout</a></li>
     </ul>
   </nav>

   <body id="addQuestionBody">
      <div class="wrapper">
        <form class="form-horizontal" action="insertQuestion.php" method="post" required="">
          <h3>Please fill all fields: </h3>
          <div class="form-group">
            <label for="qtext" class="control-label col-lg-4">Question text: </label>
            <div class="col-lg-8"><input type="text" class="form-control" id="qtext" name="text" placeholder="" required></div>
          </div>
          <div class="form-group">
            <label for="option1" class="control-label col-lg-4">Option 1: </label>
            <div class="col-lg-8"><input type="text" class="form-control" id="option1" name="option1" placeholder="" required></div>
          </div>
          <div class="form-group">
            <label for="option2" class="control-label col-lg-4">Option 2: </label>
            <div class="col-lg-8"><input type="text" class="form-control" id="option2" name="option2" placeholder="" required></div>
          </div>
          <div class="form-group">
            <label for="option3" class="control-label col-lg-4">Option 3: </label>
            <div class="col-lg-8"><input type="text" class="form-control" id="option3" name="option3" placeholder="" required></div>
          </div>
          <div class="form-group">
            <label for="option4" class="control-label col-lg-4">Option 4: </label>
            <div class="col-lg-8"><input type="text" class="form-control" id="option4" name="option4" placeholder="" required></div>
          </div>
          <div class="form-group">
            <label for="answer" class="control-label col-lg-4">Answer: </label>
            <div class="col-lg-8"><input type="text" class="form-control" id="answer" name="answer" placeholder="" required></div>
          </div>
          <?php
              if($_SESSION['category'] === 'all'){
              echo  '<div class="form-group">';
              echo ' <label for="category" class="control-label col-lg-4">Category: </label>';
              echo ' <div class="col-lg-8"><input type="text" class="form-control" id="category" name="category" placeholder="" required></div>';
              echo  '</div>';
              }
           ?>

          <div class="form-group">
            <label for="points" class="control-label col-lg-4">Points: </label>
            <div class="col-lg-8"><input type="text" class="form-control" name="points" placeholder="" required></div>
          </div>
          <input type="submit" value="Add Question" class="btn btn-primary" name='submit'>
        </form>
      </div>
     <!-- <script src="main.js" charset="utf-8"></script> -->
   </body>
 </html>
