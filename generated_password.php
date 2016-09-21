<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CSCIE15 Project 2</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">	
  </head>
  <body>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  <?php require('logic.php');?>
   
  <h1> Here is your password </h1>
  <?php print_r($password); ?> <br><br><br><br>
  
  
  <h2>Notes</h2>
  You chose to use <?php echo $words; ?>.<br>
  You chose the <?php echo $dictionary; ?> dictionary.<br>
  
  <img src = "images/<?php echo $dictionary;?>.jpg" style="width:500px;height:500px">
  </body>
</html>