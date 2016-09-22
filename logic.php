<?php

/* Defining Variables passed from form */
	$words=$_POST["words"];
	$dictionary=$_POST["dictionary"];
	$seperation=$_POST["seperation"];
	$symbols=$_POST["symbols"];
	$symbolType=$_POST["symbolType"];
    $numberCount=$_POST["numberCount"];
/* Custom variables */
	$array=(file($dictionary));
	$count=count($array);
	$countSymbols=count($symbolType);
	$i=$words;
	$min=1;
	$max=200;


	
/* framework via http://www.w3schools.com/php/func_filter_var.asp */
if (filter_var($words, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
   $error1="Please choose how many words to use (1-200). REQUIRED";
   $sent=2;
} else {
   $sent=1;
}

	
/* For Looping to add words and symbols to the array */
	for ($x=0; $x<$i; $x++){
		$randomWord = rand(0,$count);
		$passwordArray[] = $array[$randomWord];
	}

	
	for ($x=0; $x<$symbols; $x++){
		$randomSymbol = rand(0,$countSymbols);
		$passwordArray[] = $symbolType[$randomSymbol];
	}


	for ($x=0; $x<$numberCount; $x++){
	$randomNumber = rand(0,9);
	$passwordArray[] = $randomNumber;
	}
	
/* Mixing in the symbols */
	shuffle($passwordArray);
	$passwordArray = array_map('trim',$passwordArray);
	
/* Making it all a single "word" */
	if ($seperation == "comma"){
		$password = implode(",", $passwordArray);
	}elseif ($seperation == "dash"){
		$password = implode("-", $passwordArray);
	}elseif ($seperation == "pipe"){
		$password = implode("|", $passwordArray);
	}elseif ($seperation == "none"){
		$password = implode("", $passwordArray);
	}elseif ($seperation == "space"){
		$password = implode(" ", $passwordArray);		
	} 
/* Destroying whitespace */
	$password=str_replace('\r','',$password); 
    $password=str_replace(' ','',$password);
	
	