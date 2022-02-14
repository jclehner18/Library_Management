
<?php
	$server = "localhost";
	$uname = "team";
	$pwd = "team";
	$db = 'libraryManagement';
	
	$conn = mysqli_connect($server, $uname, $pwd, $db);
	if(!$conn) {
		die("Connection Failed: " .mysqli_error());
	}
	
?>