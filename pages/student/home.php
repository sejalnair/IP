<?php
	include '../../includes/studentlogin.php';
	
	include "../../includes/dbh.inc.php";

?>

<!DOCTYPE html>

<html>
<head>
	<title>Students1stpage</title>
	<meta charset="utf-8"/>

	<style type="text/css">
		.btn1{
			background-color: #123456;
			float: right;
			width: 10%;
			padding: 15px;
			margin-right: 20px;
			border:unset;
			border-radius:20px;
			

		}
		.subbtn{
			/* display:none; */
		}
		.heading{
			font-family: "Times New Roman", Times, serif;
			padding: 20px;
			margin-left:300px;
		
		}
		.div-animate{
			-webkit-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-moz-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-ms-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			}

		@-webkit-keyframes zoom-in-out {
			0%{ -webkit-transform: scale(1); transform: scale(1); }
			50%{ -webkit-transform: scale(1.08); transform: scale(1.08); }
			100%{ -webkit-transform: scale(1); transform: scale(1); }
			}

		@keyframes zoom-in-out {
			0%{ -ms-transform: scale(1); transform: scale(1); }
			50%{ -ms-transform: scale(1.08); transform: scale(1.08); }
			100%{ -ms-transform: scale(1); transform: scale(1); }
			}																									
	</style>
</head>
<body>
		<form  action="../../includes/crtquiz.php" method="post">
		<header>
			<div style="width:100%;height:100px;background-color: #eeee;font-size:30px;">
				<label>Name:</label>
				<label><?php echo $_SESSION['Name'];?></label>
				<label style="margin-left:50px;">Class:</label>
				<label><?php echo $_SESSION['Class'];?></label>
				<input type="button" name="pswd" value="Change_password" class="btn1" style="size: 10px;color:white" />
				<input type="button" name="logout" value="Logout" class="btn1" style="size: 10px;color:white" />

			</div>
		</header>
		<div style="width:15%;margin-top:70px;float:left">
			<button class="subtn"  name="maths1" value="maths1" style="width:100% ; size: 50px;padding:25px;background-color:#123456;color:white;border-radius:10px;margin-bottom:3px;" >Maths 1</button> 
			<button class="subtn"  name="dsa" value="dsa" style="width:100% ;size: 50px;padding:25px;background-color:#123456;color:white;border-radius:10px;margin-bottom:3px ;" >DSA</button>
			<button class="subtn"  name="ld" value="ld" style="width:100%;size: 50px;padding:25px;background-color: #123456;color:white;border-radius:10px;margin-bottom:3px;" >Logic Design</button>
			<button class="subtn"  name="dbms" value="dbms" style="width:100% ;size: 50px;padding:25px;background-color: #123456;color:white;border-radius:10px;margin-bottom:3px;" >DBMS</button>
		
		</div>
	
	<section >
		<?php 
			$title =  $_COOKIE['title'];
			$subtitle = $_COOKIE['subtitle'];
			if($title !== " "){
				echo "<form method='post' action='../../includes/quiz.php'>";
				echo "<div style='width:75%;float:left;height: 470px;margin-top: 60px;margin-left: 70px;border :solid 5px #720245 ' class='div-animate'>";
				echo "<br>";
				echo "<label style='float: left;margin-left: 450px;font-size:22px;'>Title: $title </label><br>";
				echo "<label style='float: left;margin-left: 450px;font-size:20px;'>Sub Title: $subtitle </label>";
				echo "<input type='submit' name='startqz' value='START QUIZ'  style='width:13% ;height:32%;background-color:#123456;color:white;margin-left: 43.5%;margin-top:150px;border-radius: 50%;font-size: 16px;border:0px;'>";
				echo "</div>";
				echo "</form>";
			}else{
				echo "<div style='font-size:26px;'><br>
				<center>No Quiz is Present</center></div>";
			}					
		?>
		
	</section>
	</form>
</body>
</html>