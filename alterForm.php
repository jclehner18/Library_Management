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
		function eventsPage()
		{
			window.location.href = "programs.php";
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
		function alterForm()
		{
			window.location.href = "alterForm.php";
		}
		function bookForm()
		{
			window.location.href = "deleteBookForm.php";
		}
		function userForm()
		{
			window.location.href = "deleteUserForm.php";
		}
		</script>
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
		<button type="button" onclick="searchForm()" class = "buttonsize">Search</button>
		<button type="button" onclick="insertForm()" class = "buttonsize">Insert</button>
		<button type="button" onclick="deleteForm()" class = "buttonsize">Delete</button>
		<button type="button" onclick="alterForm()" class = "buttonsize">Alter</button>
		
		<br><br><br><br>
		
		<button type="button" onclick="bookForm()" class = "buttonsize">Book Alter</button>
		<button type="button" onclick="userForm()" class = "buttonsize">User Alter</button>
	
	
	</body>
</html>