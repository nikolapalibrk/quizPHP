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

   <body id="success">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
            <div class="well well-sm text-center">
              <h3>You successfully added new Admin</h3><br>
              <a href="adminQuiz.php" class="btn btn-primary">Back to quiz</a>
            </div>
          </div>
        </div>
      </div>

     <!-- <script src="main.js" charset="utf-8"></script> -->
   </body>
 </html>
