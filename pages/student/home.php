<?php 
	session_start();
	include '../../includes/dbh.inc.php';
	$subject ='maths1';
	$class  = $_SESSION['Class'];
	$sql = "select * from $class where Subject= '$subject'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0 ){
		while($row = mysqli_fetch_assoc($result)){
			$a = $row['Tablename'];
			$a1 = $row['Title'];
			$a2 = $row['Subtitle'];
			setcookie('examname',$a,time() +86400, '/');
			setcookie('title',$a1,time() +86400, '/');
			setcookie('subtitle',$a2,time() +86400, '/');
		}
	}else if(mysqli_num_rows($result) === 0 ) {
		setcookie('examname'," ",time() +86400, '/');
		setcookie('title'," ",time() +86400, '/');
		setcookie('subtitle'," ",time() +86400, '/');
	}
?>

<!DOCTYPE html>

<html>
<head>
	<title>Student Home Page</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		
		.btn1{
			background-color: #720245;
			float: right;
			width: 10%;
			padding: 15px;
			margin-right: 20px;
			border:unset;
			border-radius:20px;
			
		}
		.btn2{
			background-color: #123456;
			float: right;
			width: 10%;
			padding: 15px;
			margin-right: 20px;
			border:unset;
			border-radius:20px;
			

		}
		
		.heading{
			font-family: "Times New Roman", Times, serif;
			padding: 20px;
			margin-left:300px;
		
		}
		#name{
			width:100%;
			height:100px;
			background-color: #eeee;
			font-size:30px;
		}
		#buttons{
			width:15%;
			margin-top:70px;
			float:left
		}
		#submit{
			width:60%;
			float:left;
			height: 470px;
			margin-top: 60px;
			margin-left: 70px;
			border :solid 5px #720245;
		}
		#submitbtn{
			width:15%;
			height:30%;
			background-color:#123456;
			color:white;
			margin-left: 380px;
			margin-top:200px;
			border-radius: 50%;
			font-size: 16px;
			border:0px;
		}
		.div-animate{
			padding:10px;
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
	
		@media screen and (max-width: 640px) { 
			header{
				width:120%;
			}
			#name{
				width:120%;
				
				
	
			}
			#buttons{
				width:120%;
				margin-left:40px;
				margin-top:20px;
				margin-bottom:none;
			
			
			}
			#submit{
				width:100%;
				
			}
			.btn1{
				margin-top:10px;
				width:28%;
				margin-left:30px;
	
			
				
			}
			.btn2{
				margin-top:10px;
				width:25%;
				margin-left:80px;
				margin-right:0px;
			
			}
			#submit{
				margin-top:40px;
				margin-left:none;
				width:100%;
				height:380px;
			}
			#submitbtn{
				width:32%;
				height:35%;
				margin-left:120px;
				margin-top:150px;
			
			}
		
	}
																								
	</style>
</head>
<body>
		<form  action="../../includes/crtquiz.php" method="post">
		<header>
			<div style="width:100%;height:60px;background-color: #eeee;font-size:30px; padding-top: 10px">
				<label>Name:</label>
				<label><?php echo $_SESSION['Name'];?></label>
				<label style="margin-left:50px;">Class:</label>
				<label id="label"><?php echo $_SESSION['Class'];?></label>
				<input type="button" name="pswd" value="Change_password" class="btn1" style="size: 10px;color:white" />
				<input type="button" name="logout" value="Logout" class="btn2" style="size: 10px;color:white" />

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
			if(isset($_COOKIE['edate'])){
				$date = $_COOKIE['edate'];
			$time = $_COOKIE['etime'];
			
			}
			else{
				echo "not set";
			}
			//$examdate = date('Y-m-d H:i:s', strtotime("$date $time"));
			
			// $ctime = date('Y-m-d H:i:s');
			// $time1 = strtotime($ctime);
			// $time2 = strtotime($examdate);
			// $difference = $time1 - $time2;
			
			if($title !== " "){
				echo "<div style='width:75%;float:left;height: 470px;margin-top: 60px;margin-left: 70px;border :solid 5px #720245 ' class='div-animate'>";
				echo "<br>";
				echo "<label style='float: left;margin-left: 450px;font-size:22px;'>Title: $title </label><br>";
				echo "<label style='float: left;margin-left: 450px;font-size:20px;'>Sub Title: $subtitle </label>";
				echo "<input type='submit' name='startqz' value='START QUIZ'  style='width:13% ;height:32%;background-color:#123456;color:white;margin-left: 43.5%;margin-top:150px;border-radius: 50%;font-size: 16px;border:0px;'/>";
				echo "</div>";
			}else{
				echo "<br><br>";
				echo "<center style='font-size:26px;'>No Quiz is Present</center></div>";
			}					
		?>
	
	</section>
	</form>
</body>
</html>