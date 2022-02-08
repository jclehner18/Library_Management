//usertable.php

<?php
	include 'conn.php';
	echo "<br/>";

	// sql to create table
	$sql = "CREATE TABLE users (			
			fname varchar(20) not null,
			lname varchar(20) not null,
			UcardNumber int not null,
			address varchar(30) not null,
			phone int not null,
			
			primary key(UcardNumber)
			
			)";

	if (mysqli_query($conn, $sql)) {
		echo "Table users created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);

?>