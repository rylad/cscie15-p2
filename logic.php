<?php

	$words=$_GET["words"];
	$dictionary=$_GET["dictionary"];
	$seperation=$_GET["seperation"];

	$array=(file($dictionary));
	$count=count($array);
	$i=$words;
	for ($x=0; $x<=$i; $x++){
		$random = rand(0,$count);
		$passwordArray[] = $array[$random];
	}

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
	
	$password=str_replace(' ','',$password);