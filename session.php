<?php
	session_start();
	
	if(isset($_SESSION["userNumber"]) && $_SESSION["userNumber"] === true) {
		header("location: Patterns-Home.php");
		exit;
	}
?>