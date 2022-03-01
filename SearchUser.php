<?php
	include('conn.php');
	
	$lastname = $_POST['lname'];
	$cardnum = $_POST['UcardNumber'];
	
	$sql = "select * from users where lname = '$lastname' or UcardNumber = '$cardnum'";
	$result = mysqli_query($conn, $sql);
	
?>


<html>
	<body>
	<center>
	<h2> Search Result </h2>
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
		<a href="searchForm.php">Search another user</a>
	</body>
	</center>
</html>