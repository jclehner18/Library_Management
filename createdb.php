//createdb.php

<?php
	include 'conn.php';
	echo "<br/>";

	// Create database
	$sql = "CREATE DATABASE libraryManagement";
	if (mysqli_query($conn, $sql)) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>