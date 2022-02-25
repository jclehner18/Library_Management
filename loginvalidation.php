
<?php
	session_start();
	$server = "localhost";
	$uname = "team";
	$pwd = "team";
	$db = 'libraryManagement';
	
	
	$conn = mysqli_connect($server, $uname, $pwd, $db);
	if(!$conn) {
		die("Connection Failed: " .mysqli_error());
	}
	
	
	
	$cnumber = $_POST['UcardNumber'];
	$pass = $_POST['password'];
	
	$cnumber = stripcslashes($cnumber);
	$pass = stripcslashes($pass);
	
	$cnumber = mysqli_real_escape_string($conn, $cnumber);
	$pass = mysqli_real_escape_string($conn, $pass);
	
	
	$result = mysqli_query($conn, "select * from users where UcardNumber = '$cnumber' and password = '$pass'")
			or die("Failed to query database" .mysqli_error());
			
	$row = mysqli_fetch_array($result);
	
	if($row['UcardNumber'] == $cnumber && $row['password'] == $pass )
	{
		echo "Login Successful: " .$row['fname'];
		header("refresh:1; url = MainPage.php");
		
	}
	
	else
	{
		echo "Failed to login";
		header("refresh:1; url = login.php");
	}
	
	
?>