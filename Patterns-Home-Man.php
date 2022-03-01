<!DOCTYPE html>
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
		function login()
		{
			window.location.href = "login.php";
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
			window.location.href = "searchForm.php";
		}
		function insertForm()
		{
			window.location.href = "insertForm.php";
		}
		function deleteForm()
		{
			window.location.href = "deleteForm.php";
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
		
		<br><br><br><br>
		
		<h2> Software Patterns and Teams Library </h2>
		
		<p>This website was desiged and developed by Jacob Myers, Jack Lehner, and Josiah Mortoff</p>
		
	
	
	</body>
</html>