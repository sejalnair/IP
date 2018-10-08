<?php
	include '../../includes/studentlogin.php';
	include '../../includes/crtquiz.php';

?>

<!DOCTYPE html>
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
			padding: 5px;
			margin-right: 20px;

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
			<div style="width:100%;height:100px;background-color: #eeee">
				<label>Name:</label>
				<input type="text" name="name" value="<?php echo $_SESSION['Name'];?>">
				<label>Class:</label>
				<input type="text"name="class" value="<?php echo $_SESSION['Class'];?>">
				<input type="button" name="pswd" value="Change_password" class="btn1" style="size: 10px;color:white" />
				<input type="button" name="logout" value="Logout" class="btn1" style="size: 10px;color:white" />

			</div>
		</header>
		<div style="width:15%;margin-top:70px;float:left;">
			  <input type="button" name="Sub1" value="Subject1" style="width:100% ; size: 50px;padding:25px;background-color:#123456;color:white" /> 
			<input type="button" name="Sub2" value="Subject2" style="width:100% ;size: 50px;padding:25px;background-color:#123456;color:white " />
			<input type="button" name="Sub3" value="Subject3" style="width:100%;size: 50px;padding:25px;background-color: #123456;color:white" />
			<input type="button" name="Sub4" value="Subject4" style="width:100% ;size: 50px;padding:25px;background-color: #123456;color:white" />
		
		</div>
	
	<section >
		<div style="width:60%;float:left;height: 470px;margin-top: 60px;margin-left: 70px;border :solid 5px #720245 " class="div-animate">
			<h1 style="margin-left:100px;">QUIZ TiTLE:</h1>
			<label><?php if(isset($SESSION['Title'])){ echo $_SESSION['Title']; }?></label>
			<h2 style="margin-left:100px;">Quiz Sub TiTLE:</h2>
			<label><?php if(isset($SESSION['Subtitle'])){ echo $_SESSION['Subtitle']; }?></label>
			<input type="button" name="startqz" value="START QUIZ" onclick="document.location.href ='http://localhost/Ip/pages/student/quiz.php';" style="width:15% ;height:30%;background-color:#123456;color:white;margin-left: 380px;margin-top:200px;border-radius: 50%;font-size: 16px;border:0px;">
			
	</section>
	</form>
	<!-- #1CFBB1 -->
</body>
</html>