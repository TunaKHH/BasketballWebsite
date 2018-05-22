<?php
	$servername = "localhost";
	$username = "root";
	$password = "l0726";
	$dbname = "basketball_game";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
?>