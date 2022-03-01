<?php
	include 'conn.php';
	$unumber = $_POST['UcardNumber'];
	$sql = "delete from users where UcardNumber = '$unumber';";
	$result = mysqli_query($conn, $sql);
	
	/*if(mysqli_query($conn, $sql)) {
		echo "Record deleted successfully.";
	}
	else {
		echo "Error:" .$sql. "<br />" .mysqli_error($conn);
	} */
	
	header("refresh:0; url = deleteForm.php");
	mysqli_close($conn);

?>