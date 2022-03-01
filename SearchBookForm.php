<?php

	include('conn.php');
	$sql = "select * from books";
	$result = mysqli_query($conn,$sql);


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
			window.location.href = "Patterns-Home.php";
		}
		function login()
		{
			window.location.href = "login.php";
		}
		function sciFiPage()
		{
			window.location.href = "sciFi.php";
		}
		function fantasyPage()
		{
			window.location.href = "fantasy.php";
		}
		function nonFictionPage()
		{
			window.location.href = "nonFiction.php";
		}
		function articlesPage()
		{
			window.location.href = "news-articles.php";
		}
		function searchForm()
		{
			window.location.href = "SearchBookForm.php";
		}
		</script>
		<link rel="stylesheet" type="text/css" href="cssstyle.css" media="screen" />
	</head>
	<body class = "scenery-background">
		<h1 style = "color: white;">Trine Library</h1>
		<br>
		<button type="button" onclick="login()" class = "buttonsize">Log In</button>
		<button type="button" onclick="homePage()" class = "buttonsize">Home</button>
		<button type="button" onclick="sciFiPage()" class = "buttonsize">Sci-Fi</button>
		<button type="button" onclick="fantasyPage()" class = "buttonsize">Fantasy</button>
		<button type="button" onclick="nonFictionPage()" class = "buttonsize">Nonfiction</button>
		<button type="button" onclick="articlesPage()" class = "buttonsize">Newspapers</button>
		<button type="button" onclick="searchForm()" class = "buttonsize">Search</button><br><br><br><br><br><br>
		
		
		<center>
		<h2> Enter Book ISBN or Title </h2>
		<form action="SearchBook.php" method="post" >
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
</html>