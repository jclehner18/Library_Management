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
		<h2> User Search </h2>
		<form name = "searchUser" method="post" >
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
				<td> <?php echo $rows['lanme']; ?> </td>
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