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
     <a href="index.php">Quiz App</a>
     <ul>
       <li><a href="addQuestion.php">Add Questions</a></li>
       <li><a href="addAdmin.php">Add Admin</a></li>
       <li><a href="logout.php">Logout</a></li>
     </ul>
   </nav>

   <body id="loginBody">
      <div class="wrapper">
        <form class="" action="insertAdmin.php" method="post">
          <i class="fa fa-superpowers" aria-hidden="true"></i>
          <h3>Fill in the data for new Admin</h3>
          <input type="text" placeholder="username" name="username" required="">
          <input type="password" placeholder="password" name="password" required="">
          <!-- <div class="form-group"> -->
            <label for="sel1">Select category:</label>
            <select class="form-control" id="sel1" name="category">
              <option value="all">All</option>
              <option value="movies">Movies</option>
              <option value="sport">Sport</option>
              <option value="history">History</option>
            </select>
          <!-- </div> -->
          <input type="submit" value="Add" name='submit'>
        </form>
      </div>
     <!-- <script src="main.js" charset="utf-8"></script> -->
   </body>
 </html>
