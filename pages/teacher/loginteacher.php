<?php
	include "../../includes/teacherlogin.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>QuizZone | Teacher Login</title>
	<link rel="stylesheet" type="text/css" href="../styles/login.css">
</head>
<body>
	<div id="content">
		<div class="header" style="margin-top:unset;"><label id="text">Teacher Login</label></div>
		<div class="form">
			<form action="loginteacher.php" method="post">
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