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
<?php require('logic.php')?>


<!-- Generating first password --> 
  
  <?php if ($sent == 1) : ?>
	  <h1> Here is your password </h1>
	  <?php print_r($password);?> <br><br><br><br>
	  <img src = "images/<?php echo $dictionary;?>.jpg" style="width:500px;height:500px">
	  <br>
  <?php endif; ?>

<!-- Creating the form to get user input -->


 <form action="index.php" method="post">
  <h3>How many words should your password contain?</h3> 
  <input type="text" name="words" style="width: 500px" placeholder="Enter a number"><br>
  <p><?php echo $error1;?></p>

 <br>
  <h3>Which Dictionary would you like to use?</h3><br>
  <input type="radio" name="dictionary" value="topEnglish" checked> Top English Words<br>
  <input type="radio" name="dictionary" value="Elvish"> Elvish<br>
  <input type="radio" name="dictionary" value="Klingon"> Klingon<br>
  <br>
  <h3>How would you like your words seperated?</h3><br>
  <input type="radio" name="seperation" value="none" checked> No Seperation<br>
  <input type="radio" name="seperation" value="comma"> Comma (,)<br>
  <input type="radio" name="seperation" value="dash"> Dash (-)<br>
  <input type="radio" name="seperation" value="pipe"> Pipe (|)<br>
  <input type="radio" name="seperation" value="space"> Space ( )<br>

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
  <h3> How many numbers would you like in this password?</h3>
    <select name="numberCount" style="width: 10%">
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
  
  <h3> If you would like symbols, which symbols should we include?</h3>
  <input type="checkbox" name="symbolType[]" value="?" checked> ? <br>
  <input type="checkbox" name="symbolType[]" value="!" checked> ! <br>
  <input type="checkbox" name="symbolType[]" value="@" checked> @ <br>
  <input type="checkbox" name="symbolType[]" value="#" checked> # <br>
  <input type="checkbox" name="symbolType[]" value="$" checked> $ <br>
  <input type="checkbox" name="symbolType[]" value="%" checked> % <br>
  <input type="checkbox" name="symbolType[]" value="&" checked> & <br>  
  <hr>


  <input type="submit" value ="Generate">
  <input type="hidden" name="sent" value='<?php echo $sent;?>'>
  </form>
  <br>
  **Disclaimer - Elvish and Klingon use very strange characters in general and are NOT considered as part of the symbol count.
  </body>
</html>