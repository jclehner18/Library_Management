<?php
	include('conn.php');
	
	$bookISBN = $_POST['ISBN'];
	$btitle = $_POST['title'];
	$sql = "select * from books where ISBN = '$bookISBN' or title = '$btitle'";
	$result = mysqli_query($conn,$sql);

	
	//header("refresh:0; url = SearchBookForm.php");
	mysqli_close($conn);
?>

<html>
	<center>
	<body>
		<h2> Search Result </h2>
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
			
			
		</table></br>
		<a href="SearchBookForm.php">Search another book</a>
	</body>
	<center>
</html>

