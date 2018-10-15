<?php
include 'studentlogin.php';
	// session_start();
	// $class =  $_SESSION['Class'];
	// echo $class;
	$subject = 'maths1';
	$class = $_COOKIE['class'];
	if(isset($_POST['maths1'])){
		$subject = 'maths1';
	}
	if(isset($_POST['dsa'])){
		$subject='dsa';
	}
	if(isset($_POST['ld'])){
		$subject='ld';
	}
	if(isset($_POST['dbms'])){
		$subject='dbms';
	}
	
	
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
			header('Location: ../pages/student/home.php');
			break;
		}
	}else {
		setcookie('examname'," ",time() +86400, '/');
		setcookie('title'," ",time() +86400, '/');
		setcookie('subtitle'," ",time() +86400, '/');
		header('Location: ../pages/student/home.php');
	}
	
	if(isset($_POST['startqz'])){
		echo "<script>console.log('hellllll')</script>";
		//header("Location: ../pages/student/quiz.php");
	}

?>
