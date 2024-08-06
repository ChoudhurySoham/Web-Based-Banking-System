<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Indian_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

	$sql = "CREATE TABLE IF NOT EXISTS users(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		email VARCHAR(30) NOT NULL,
		balance INT(10),
		reg_date TIMESTAMP)";
		mysqli_query($conn, $sql);
		// if (mysqli_query($conn, $sql)) {
		// 	echo "Table users created successfully <br>";
		// } 
		// else {
		// 	echo "Error creating table: " . mysqli_error($conn);
		// }


	$sql = "CREATE TABLE IF NOT EXISTS transaction (
		sno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		sender VARCHAR(30) NOT NULL,
		receiver VARCHAR(30) NOT NULL,
		balance INT(10),
		datetime TIMESTAMP)";
		mysqli_query($conn, $sql);
		// if (mysqli_query($conn, $sql)) {
		// 	echo "Table transaction created successfully <br>";
		// } 
		// else {
		// 	echo "Error creating table: " . mysqli_error($conn);
		// }

		
		

?>