<?php 
	// functions.php
	require("/home/kerta/config.php");
	
	// et saab kasutada $_SESSION muutujaid
	// kõigis failides mis on selle failiga seotud
	session_start(); 
	
	/* ÜHENDUS */
	$database = "if16_kertaavik";
	$mysqli = new mysqli($serverHost, $serverUsername,  $serverPassword, $database);

	
?>