<?php

	$servername = "localhost";
	$username = "hr_online_app_db";
	$password = "hr_online_app_db";
	$database = "hr_online_app_db4";



	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);



	// Check connection

	if (!$conn) {

	    die("Connection failed: " . mysqli_connect_error());

	}

	//echo "Connected successfully";

?>