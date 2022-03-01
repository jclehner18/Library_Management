<?php
	include 'conn.php';
	
	$sql = "Select * from users";
	$result = mysqli_query($conn, $sql);

?>

<html>
	<head>
		<title> Delete User </title>
		<link rel="stylesheet" type="text/css" href="cssstyle.css" media="screen" />
	</head>
	<body>
		<center>
			<h2> Delete a user </h2>
			<form action = "deleteUser.php" method = "post">
				User Number: <input type = "text" name = "UcardNumber" required=""></br></br>
				<input type = "submit" value = "Delete"></br></br>
			</form>
			<table border=1>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Card Number</th>
				<th>Address</th>
				<th>Phone</th>
				
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
	</body>
</html>