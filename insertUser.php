//insert user
<?php

include 'conn.php';
	
	$userfname = $_POST['fname'];
	$userlname = $_POST['lname'];
	$usernumber = $_POST['UcardNumber'];
	$useraddress = $_POST['address']; 
	$userphone = $_POST['phone'];
	$userclearence = $_POST['clearence'];
	$userpassword = $_POST['password'];
	
	$sql = "INSERT INTO users(fname, lname, UcardNumber, address, phone, clearence, password) VALUES('$userfname', '$userlname', '$usernumber', '$useraddress', '$userphone', '$userclearence', '$userpassword');";
	
	
	if(mysqli_query($conn, $sql)) {
		echo "Record inserted successfully.";
	}
	else {
		echo "Error:" .$sql. "<br />" .mysqli_error($conn);
	}
	
	header("refresh:0; url = insertUserForm.php");
	mysqli_close($conn);

?>