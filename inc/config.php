<?php

/**
 *	This is a PHP file concerning the connection
 *	of the website to the database

 * 	Author: John Christopher E. Azcarraga
 *	Date: January 2017
 */

	/* 
	 *	Necessary variables for database connection
	 *	LIVE configration
	 */
	
	$host_name 	= "localhost";
	//$host_name 	= "202.92.131.252";
	$database 	= "corvatraining"; 	// Database Name
	$username 	= "jca"; 			// Database user id
	//$username 	= "root"; 			// Database user id 
	$password 	= "ms1jc1"; 		// Password
	//$password 	= ""; 		// Password

	//////// DO NOT EDIT BELOW /////////
	try {
	$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}	
	
?>


