//insert user form

<?php

include 'conn.php';

	$sql = "select * from users"; 
	$result = mysqli_query($conn,$sql); 

?>

<html>
	<head>
		<title> Insert Users </title>
	</head>
	
	<body>
		<center>
		<h2>Insert a user</h2>
		<form action = "insertUser.php" method = "post">
		First Name: <input type="text" name="fname" required=""><br/><br/>
		Last Name: <input type = "text" name = "lname" required=""><br /><br />
		Card Number: <input type = "text" name = "UcardNumber" required=""><br /><br />
		Address: <input type = "text" name = "address" required=""><br /><br />
		Phone: <input type = "text" name = "phone" required=""><br /><br />
		<input type = "submit" value = "SUBMIT"></br></br>
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