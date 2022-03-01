//insert books
<?php

include 'conn.php';

	$sql = "select * from books"; 
	$result = mysqli_query($conn,$sql); 

?>

<html>
	<head>
		<title> Insert Books </title>
	</head>
	
	<body>
		<center>
		<h2>Insert a book</h2>
		<form action = "insertBook.php" method = "post">
		Title: <input type="text" name="title" required=""><br/><br/>
		Author: <input type = "text" name = "author" required=""><br /><br />
		ISBN: <input type = "text" name = "ISBN" required=""><br /><br />
		Copies: <input type = "text" name = "copies" required=""><br /><br />
		Genre: <input type = "text" name = "genre" required=""><br /><br />
		<input type = "submit" value = "SUBMIT"></br></br>
		</form>
		<table border=1>
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>ISBN</th>
				<th>Copies</th>
				<th>Genre</th>
				
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
				<td> <?php echo $rows['genre']; ?> </td>
				
			</tr>
			<?php
				}
			?>
			
		</table>
		</center>
	</body>
</html>