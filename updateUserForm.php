<?php
	include 'conn.php';
	
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	
?>

<html>
	<head>
		<title>  </title>
	</head>
	<body>
		<center>
		<h2>Update a user</h2>
		
		<table border=1>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Card Number</th>
				<th>Address</th>
				<th>Phone</th>
				<th> Update </th>
				
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
				<td> <a href = "updateUser.php">Update</a> </td>
				
			</tr>
			<?php
				}
			?>
			
		</table>
		</center>
	</body>
</html>