<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "unidb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Database connection failed: " . $conn->connect_error);
	} 
?>
