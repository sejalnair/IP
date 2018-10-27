<?php
	include "../includes/adminlogin.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>QuizZone | Admin Login</title>
	<link rel="icon" href="quizicon.png" />
	<link rel="stylesheet" type="text/css" href="./pages/styles/login.css">
</head>
<body>
	<div id="content"> 
		<div class="header">Admin Login</div>
		<div class="form">
			<form action="./includes/adminlogin.php" method="post">
				<div id="emailid">
					<label>Email-id:  </label>
					<input type="email" name="email"><br>
				</div>
				<div id="pass">
					<label>Password:</label>
					<input type="password" name="password"><br>
				</div>
				<div id="submit">
					<button type="submit" name="submit">Submit</button>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>