<?php
	include "dbh.inc.php";
	session_start();
	if(isset($_POST['createqz'])){
		setcookie('class',$_POST['class'],time() +86400, '/');
		setcookie('subject',$_POST['subject'],time() +86400, '/');
		setcookie('time',$_POST['exam_time'],time() +86400, '/');
		setcookie('date',$_POST['exam_date'],time() +86400, '/');
		setcookie('title',$_POST['title'],time() +86400, '/');
		setcookie('subtitle',$_POST['subtitle'],time() +86400, '/');
	
		// Insert values in particular class
		$class = $_POST['class'] ;
		$subject = $_POST['subject'];
		$date = $_POST['exam_date'];
		$time = $_POST['exam_time'] ;
		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$sql = "INSERT INTO $class( Class, Subject , Title, Subtitle, Examdate , ExamTime) VALUES ('$class','$subject','$title','$subtitle','$date','$time');";
		mysqli_query($conn,$sql);

		$sql = "select Id from $class ORDER BY Id DESC LIMIT 1;";
		$result= mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($result);
		$id = $data[0];
		// Updating table with tablename in table
		$tablename = $class."_".$subject."_".$id;
		setcookie('tablename',$tablename,time() +86400, '/');
		$sql = "Update $class set Tablename = '$tablename' where Id = $id";
		mysqli_query($conn,$sql);

		// creating tables in database
		$sql = "create table $tablename ( Question_no int primary key AUTO_INCREMENT,Question varchar(1000),C1 varchar(50),C2 varchar(50),C3 varchar(50),C4 varchar(50),Answer varchar(1));";
		mysqli_query($conn,$sql);
		header("Location: ../pages/teacher/createquiz.php");
	}
?>