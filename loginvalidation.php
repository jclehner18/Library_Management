<?php
	include 'conn.php';
	
	if(isset($_POST['but_submit'])){
		
		$username = mysqli_real_escape_string($con, $_POST['uname']);
		$password = mysqli_real_escape_string($con, $_POST['pass']);
		
		if($uname != "" && $password != ""){
			$sql_query = "Select count(*) as cntUser form users where UcardNumber = '".$username."' and password = '".$password."'";
			$result = mysqli_query($con, $sql_query);
			$row = mysqli_fetch_array($result);
			
			$count = $row['cntUser'];
			
			if($count > 0){
            $_SESSION['username'] = $uname;
            header('Location: Pattern-Home.php');
			}else{
            echo "Invalid username and password";
			}
		}
	}
?>