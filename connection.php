<?php 
	$servername = "localhost";
	$username = "YOUR_USERNAME";
	$password = "YOUR_PASSWORD";
	$dbname = "YOUR_DATABASE_NAME";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	//echo "Success";
 ?>