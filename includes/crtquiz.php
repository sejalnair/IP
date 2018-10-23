<?php
	include 'studentlogin.php';
	//session_start();
	// $class =  $_SESSION['Class'];
	// echo $class;
	$subject = 'maths1';
	$class = $_COOKIE['class'];
	if(isset($_POST['maths1'])){
		$subject = 'maths1';
		setcookie('subject',$subject,time() +86400, '/');
	}
	if(isset($_POST['dsa'])){
		$subject='dsa';
		setcookie('subject',$subject,time() +86400, '/');
	}
	if(isset($_POST['ld'])){
		$subject='ld';
		setcookie('subject',$subject,time() +86400, '/');
	}
	if(isset($_POST['dbms'])){
		$subject='dbms';
		setcookie('subject',$subject,time() +86400, '/');
	}
	
	if($_COOKIE['subject']){
		$subject = $_COOKIE['subject'];
	}
	$sql = "select * from $class where Subject= '$subject'";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0 ){
		while($row = mysqli_fetch_assoc($result)){
			$a = $row['Tablename'];
			$a1 = $row['Title'];
			$a2 = $row['Subtitle'];
			$sid = $_COOKIE['sid'];
			$class = $_COOKIE['class'];
			$qtablename = $sid."_".$a;
			$sql1 = "select * from result where Sid = $sid and Class = '$class' and examname= '$a'";
			$result1 = mysqli_query($conn,$sql1);
			if(!mysqli_num_rows($result1) > 0){
				setcookie('examname',$row['Tablename'],time() +86400, '/');
				setcookie('title',$a1,time() +86400, '/');
				setcookie('subtitle',$a2,time() +86400, '/');
				setcookie('qtablename',$qtablename,time() +86400, '/');
				header('Location: ../pages/student/home.php');
				break;
			}else{
				setcookie('examname'," ",time() +86400, '/');
				setcookie('title'," ",time() +86400, '/');
				setcookie('subtitle'," ",time() +86400, '/');
				setcookie('qtablename'," ",time() +86400, '/');
				header('Location: ../pages/student/home.php');
			}
			
		}
	}else if(mysqli_num_rows($result) === 0 ) {
		setcookie('examname'," ",time() +86400, '/');
		setcookie('title'," ",time() +86400, '/');
		setcookie('subtitle'," ",time() +86400, '/');
		setcookie('qtablename'," ",time() +86400, '/');
		header('Location: ../pages/student/home.php');
	}
	
	if(isset($_POST['startqz'])){
		$sid = $_COOKIE['sid'];
		$examname = $_COOKIE['examname'];
		$qtablename = $sid."_".$examname;
		//setcookie('qtablename',$qtablename,time() +86400, '/');
		
		// creating tables in database
		$sql = "create table $qtablename ( Question_no int primary key,Answer varchar(2),State int check(State in (1,2,3)));";
		mysqli_query($conn,$sql);
		$i=1;
		echo $i;
		setcookie('QuestionNo',$i,time() +86400, '/');
		
		$_SESSION['duration']=45;
		$_SESSION['start_time']=date("Y-m-d H:i:s");

		$end_time = date('Y-m-d H:i:s',strtotime('+'.$_SESSION['duration'].'minutes',strtotime($_SESSION['start_time'])));

		$_SESSION['end_time']=$end_time;

		header("Location: ../pages/student/quiz.php");
	}

	
	

?>