<?php
	include 'conn.php';
	echo "<br/>";

	// sql to create table
	$sql = "CREATE TABLE books (
	
			title varchar(20) not null,
			author varchar(20) not null,
			ISBN float (14,0) not null,
			copies int not null,
			genre varchar(20) not null,
			
			primary key(ISBN)
			
			)";

	if (mysqli_query($conn, $sql)) {
		echo "Table books created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);

?>