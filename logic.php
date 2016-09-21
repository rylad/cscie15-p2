<?php

	$words=$_GET["words"];
	$dictionary=$_GET["dictionary"];
	$seperation=$_GET["seperation"];
	$symbols=$_GET["symbols"];
	$symbolType=$_GET["symbolType"];
	
	$array=(file($dictionary));
	$count=count($array);
	$countSymbols=count($symbolType);
	$i=$words;
	
	for ($x=0; $x<=$i; $x++){
		$randomWord = rand(0,$count);
		$passwordArray[] = $array[$randomWord];
	}

	
	for ($x=0; $x<=$symbols; $x++){
		$randomSymbol = rand(0,$countSymbols);
		$passwordArray[] = $symbolType[$randomSymbol];
	}
	
	shuffle($passwordArray);
	$passwordArray = array_map('trim',$passwordArray);
	
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
	
	$password=str_replace('\r','',$password); 
    $password=str_replace(' ','',$password);
	
	