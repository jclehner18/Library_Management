<?php

	include 'conn.php';
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);


?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cssstyle.css" media="screen" />
	<body>
		<center>
		<h2> User Search </h2>
		<form action = "SearchUser.php" method="post" >
			<p>Last Name: </br>
			<input type = "text" name="lname"> </br></br>
			OR </br></br>
			Card Number: </br>
			<input type = "text" name = "UcardNumber"></p>
			<p><input type = "submit" value="search"></p></br> 
			
		</form>
	<table border=1>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Card Number</th>
				<th>Address</th>
				<th>Phone Number</th>
				
			</tr>
			<?php
				while($rows=mysqli_fetch_assoc($result))
				{
			?>
			<tr>
				<td> <?php echo $rows['fname']; ?> </td> 
				<td> <?php echo $rows['lname']; ?> </td>
				<td> <?php echo $rows['UcardNumber']; ?> </td>
				<td> <?php echo $rows['address']; ?> </td>
				<td> <?php echo $rows['phone']; ?> </td>
				
			</tr>
			<?php
				}
			?>
			
			
		</table>
	</center>
	
</html>