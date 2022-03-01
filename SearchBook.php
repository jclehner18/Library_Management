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
	<head>
		<title>Trine University Library</title>
		<style type = "text/css">
		.scenery-background
		{
			background: url(trine.png);
			background-repeat: no-repeat;
			background-size: 1600px 250px;
			padding: 15px;
		}
		.buttonsize
		{
			height: 50px;
			width: 150px;
		}
		</style>
		<script>
		function homePage()
		{
			window.location.href = "Patterns-Home-Man.php";
		}
		function sciFiPage()
		{
			window.location.href = "sciFi-Man.php";
		}
		function fantasyPage()
		{
			window.location.href = "fantasy-Man.php";
		}
		function nonFictionPage()
		{
			window.location.href = "nonFiction-Man.php";
		}
		function articlesPage()
		{
			window.location.href = "news-articles-Man.php";
		}
		function searchForm()
		{
			window.location.href = "SearchBookForm-Man.php";
		}
		function insertForm()
		{
			window.location.href = "insertBookForm-Man.php";
		}
		function deleteForm()
		{
			window.location.href = "deleteBookForm-Man.php";
		}
		</script>
	</head>
	
	<body class = "scenery-background">
		<h1 style = "color: white;">Trine Library</h1>
		<br>
		<button type="button" onclick="homePage()" class = "buttonsize">Home</button>
		<button type="button" onclick="sciFiPage()" class = "buttonsize">Sci-Fi</button>
		<button type="button" onclick="fantasyPage()" class = "buttonsize">Fantasy</button>
		<button type="button" onclick="nonFictionPage()" class = "buttonsize">Nonfiction</button>
		<button type="button" onclick="articlesPage()" class = "buttonsize">Newspapers</button>
		<button type="button" onclick="searchForm()" class = "buttonsize">Search</button>
		<button type="button" onclick="insertForm()" class = "buttonsize">Insert</button>
		<button type="button" onclick="deleteForm()" class = "buttonsize">Delete</button>
		<center><br><br><br><br><br><br>
		<h2> Search Result </h2>
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
			
			
		</table></br>
		<a href="SearchBookForm-Man.php">Search another book</a>
	</body>
	<center>
</html>

