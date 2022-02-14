<?php
	include 'conn.php';
	
	$sql = "Select * from books";
	$result = mysqli_query($conn, $sql);

?>

<html>
	<head>
		<title> Delete Book </title>
	</head>
	<body>
		<center>
			<h2> Delete a book </h2>
			<form action = "deleteBook.php" method = "post">
				ISBN: <input type = "text" name = "ISBN" required=""></br></br>
				<input type = "submit" value = "Delete"></br></br>
			</form>
			<table border=1>
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>ISBN</th>
				<th>Copies</th>
				
			</tr>
			<?php
				while($rows=mysqli_fetch_assoc($result))
				{
			?>
			<tr>
				<td> <?php echo $rows['title']; ?> </td> 
				<td> <?php echo $rows['author']; ?> </td>
				<td> <?php echo $rows['ISBN']; ?> </td>
				<td> <?php echo $rows['copies']; ?> </td>
				
			</tr>
			<?php
				}
			?>
			
			</table>
		</center>
	</body>
</html>