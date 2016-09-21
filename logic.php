<?php

/* Defining Variables passed from form */
	$words=$_GET["words"];
	$dictionary=$_GET["dictionary"];
	$seperation=$_GET["seperation"];
	$symbols=$_GET["symbols"];
	$symbolType=$_GET["symbolType"];

/* Custom variables */
	$array=(file($dictionary));
	$count=count($array);
	$countSymbols=count($symbolType);
	$i=$words;
	
/* For Looping to add words and symbols to the array */
	for ($x=0; $x<=$i; $x++){
		$randomWord = rand(0,$count);
		$passwordArray[] = $array[$randomWord];
	}

	
	for ($x=0; $x<=$symbols; $x++){
		$randomSymbol = rand(0,$countSymbols);
		$passwordArray[] = $symbolType[$randomSymbol];
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
	} else {
		echo "Something broke...";
    }

/* Destroying whitespace */
	$password=str_replace('\r','',$password); 
    $password=str_replace(' ','',$password);
	
	