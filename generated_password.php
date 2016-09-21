<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CSCIE15 Project 2</title>
    <?php require('includeHeader.html') ?>  </head>
  <body>
<!-- Generic Navigation include -->
<?php require('navigation.html')?>
<?php require('logic.php');?>

  <h1> Here is your password </h1>
  <?php print_r($password);?> <br><br><br><br>
  
  
  <h2>Selection Notes</h2>
  You chose to use <?php echo $words; ?> words.<br>
  You chose the <?php echo $dictionary; ?> dictionary.<br><br><br><br>
  
  
  <h3>Here is a picture relevant to your dictionary.</h3>
  <hr>
  <img src = "images/<?php echo $dictionary;?>.jpg" style="width:500px;height:500px">
  </body>
</html>