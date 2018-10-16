<?php
	include "dbh.inc.php";
	session_start();
	if(isset($_POST["startqz"])){
		
		$examname =  $_COOKIE['examname'];
		$sql = "select * from $examname where id='1'";
		setcookie('QuestionNo',$i,time() +86400, '/');
		header('Location: ../pages/student/quiz.php');
	}
	
	if(isset($_POST['questionbtn'])){
		$examname =  $_COOKIE['examname'];

		$i= $_POST['questionbtn'];
		setcookie('QuestionNo',$i,time() +86400, '/');
		header('Location: ../pages/student/quiz.php');
	}

?>