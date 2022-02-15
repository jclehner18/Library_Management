<?php
	include 'conn.php';
	
	$userfname = $_POST['fname'];
	$userlname = $_POST['lname'];
	$usernumber = $_POST['UcardNumber'];
	$useraddress = $_POST['address']; 
	$userphone = $_POST['phone'];
	
	$sql = "UPDATE users SET fname = '$userfname', lname = '$userlname', UcardNumber = '$usernumber', address = '$useraddress', phone = '$userphone';";
	
	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);

?>