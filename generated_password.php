<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CSCIE15 Project 2</title>
  </head>
  <body>
  
  You chose <?php echo $_GET["words"]; ?><br>
  
  <h1> Here is your password </h1>
  
  <?php 
  error_reporting(E_ALL); 

  $words=$_GET["words"];
  $array=(file("wordlist.txt"));
  $count=count($array);
  $i=$words;
  for ($x=0; $x<=$i; $x++){
	  $random = rand(0,$count);
	  echo $array[$random];
  }
  ?>
  </body>
</html>