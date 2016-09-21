<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CSCIE15 Project 2</title>
    <?php require('includeHeader.html') ?>


  </head>
  <body>

<!-- Generic Navigation include -->
<?php require('navigation.html')?>
	
<!-- Creating the form to get user input -->

 <form action="generated_password.php" method="get">
  <h3>How many words should your password contain?</h3> <input type="text" name="words" style="width: 10%"><br>
 <br>
  <h3>Which Dictionary would you like to use?</h3><br>
  <input type="radio" name="dictionary" value="topEnglish" checked> Top English Words<br>
  <input type="radio" name="dictionary" value="Elvish"> Elvish<br>
  <input type="radio" name="dictionary" value="Klingon"> Klingon<br>
  <br>
  <h3>How would you like your words seperated?</h3><br>
  <input type="radio" name="seperation" value="comma" checked> Comma (,)<br>
  <input type="radio" name="seperation" value="dash"> Dash (-)<br>
  <input type="radio" name="seperation" value="pipe"> Pipe (|)<br>
  <input type="radio" name="seperation" value="space"> Space ( )<br>
  <input type="radio" name="seperation" value="none"> No Seperation<br>
  <br>
  <h3>How many symbols would you like in your password?</h3>
  Note: Highly recommend no seperation for this one <br>
  <select name="symbols" style="width: 10%">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
  </select> 
  <hr>
  <input type="submit">
  </form>

  </body>
</html>