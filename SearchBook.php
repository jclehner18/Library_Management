<?php
	include('conn.php');
	
	$bookISBN = $_POST['ISBN'];
	$btitle = $_POST['title'];
	
	$sql = "select * from books where ISBN = '$bookISBN' or title = '$btitle'";
	$result = mysqli_query($conn,$sql);
?>


<html>
	<body>
		<center>
		<h2> Enter Book ISBN or Title </h2>
		<form name = "searchBooks" method="post" >
			<p>Title: </br>
			<input type = "text" name="title"> </br></br>
			OR </br></br>
			ISBN: </br>
			<input type = "text" name = "ISBN"></p>
			<p><input type = "submit" value="search"></p></br> 
			
		</form>
	</body>
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
</html>