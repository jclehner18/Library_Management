<!DOCTYPE html>
<html>
	<head>
		<title>Trine University Library</title>
		<style type = "text/css">
		.scenery-background
		{
			background: url(trine.png);
			background-repeat: no-repeat;
			background-size: 1600px 200px;
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
			window.location.href = "home.php";
		}
		function locationsPage()
		{
			window.location.href = "locations.php";
		}
		function booksPage()
		{
			window.location.href = "books.php";
		}
		function moviePage()
		{
			window.location.href = "movie.php";
		}
		function gamesPage()
		{
			window.location.href = "games.php";
		}
		function eventsPage()
		{
			window.location.href = "programs.php";
		}
		function aboutUs()
		{
			window.location.href = "aboutUs.php";
		}
		
		</script>
	</head>
	
	
	<body class = "scenery-background">
		<h1>Trine Library</h1>
		<br>
		<button type="button" onclick="login()" class = "buttonsize">Log In</button>
		<button type="button" onclick="homePage()" class = "buttonsize">Home</button>
		<button type="button" onclick="sciFiPage()" class = "buttonsize">Sci-Fi</button>
		<button type="button" onclick="fantasyPage()" class = "buttonsize">Fantasy</button>
		<button type="button" onclick="nonFictionPage()" class = "buttonsize">Nonfiction</button>
		<button type="button" onclick="articlesPage()" class = "buttonsize">Newspapers</button>
		<button type="button" onclick="eventsPage()" class = "buttonsize">Events</button>
		<button type="button" onclick="aboutUs()" class = "buttonsize">About Us</button>
		
		<form action = "search.php" method = "post">
			<input type = "text" name = "search" placeholder="Search" style = "float: right; padding: 4px; font-size: 17px; margin-right: 25px">
			<input type = "submit" style = "float: right">
		</form>
		
		
		
		
		<a href = "eventsPage.php" target = "_blank" style = "text-align:right; margin-top:1000px">Upcoming Events!</a>
		
	
	
	</body>
</html>