<html>
	<head>
		<meta charset = "utf-8">
		<title> Login </title>
		<link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class = "login">
			<h1> Login </h1>
			<form action = "loginvalidation.php" method="post">
				<label for="UcardNumber"> 
					<i class = "fas fa-user"></i>
				</label>
				
				<input type = "text" name = "UcardNumber" placeholder = "UcardNumber" id = "UcardNumber" required>
				<label for = "password"> 
					<i class = "fas fa-lock"> </i>
				</label>
				<input type = "text" name = "password" placeholder = "Password" id = "password" required>
				<input type = "submit" value = "Login" id="sub">
			</form>
		</div>
	</body>
</html>