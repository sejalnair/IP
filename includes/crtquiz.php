<?php
	include 'studentlogin.php';
	//session_start();
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
	
	
	
	if(isset($_POST['startqz'])){

		$sid = $_COOKIE['sid'];
		$examname = $_COOKIE['examname'];
		$qtablename = $sid."_".$examname;
		setcookie('qtablename',$qtablename,time() +86400, '/');
		
		// creating tables in database
		$sql = "create table $qtablename ( Question_no int primary key,Answer varchar(2),State int check(State in (1,2,3)));";
		mysqli_query($conn,$sql);
		$i=1;
		echo $i;
		setcookie('QuestionNo',$i,time() +86400, '/');
		header("Location: ../pages/student/quiz.php");
	}

?>
