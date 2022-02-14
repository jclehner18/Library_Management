<?php

include 'conn.php';
	
	$btitle = $_POST['title'];
	$bauthor = $_POST['author'];
	$bISBN = $_POST['ISBN'];
	$bcopies = $_POST['copies']; 
	
	$sql = "INSERT INTO books(title, author, ISBN, copies) VALUES('$btitle', '$bauthor', '$bISBN', '$bcopies');"; 
	
	if(mysqli_query($conn, $sql)) {
		echo "Record inserted successfully.";
	}
	else {
		echo "Error:" .$sql. "<br />" .mysqli_error($conn);
	}
	
	header("refresh:0; url = insertBook.php");
	mysqli_close($conn);

?>