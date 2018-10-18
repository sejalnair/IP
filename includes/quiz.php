<?php
	include "dbh.inc.php";
	session_start();
	
	if(isset($_POST['questionbtn'])){
		$examname =  $_COOKIE['examname'];

		$i= $_POST['questionbtn'];
		setcookie('QuestionNo',$i,time() +86400, '/');
		$qtable = $_COOKIE['qtablename'];
		$sql = "Select Answer from $qtable where Question_no = $i";
		$r = mysqli_query($conn,$sql);
		if(mysqli_num_rows($r) > 0){
			$answer = mysqli_fetch_array($r);
			setcookie('answer',$answer[0],time() +86400, '/');
		}
		else{
			setcookie('answer','o5',time() +86400, '/');
		}
		header('Location: ../pages/student/quiz.php');
	}

	if(isset($_POST['next'])){
		$que_no = $_COOKIE['QuestionNo'];
		$ans =  $_POST['option'];

		$qtable = $_COOKIE['qtablename'];
		
		$query = "Select * from $qtable where Question_no=$que_no";
		$r = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($r) === 0){
			$q = "Insert into $qtable values($que_no,'$ans')";
		}
		else{
			$q = "Update $qtable set Answer='$ans' where Question_no=$que_no";
		}
		print_r($q);
		mysqli_query($conn,$q);
		
		$examname =  $_COOKIE['examname'];
		$sql = "select * from $examname;";
		$result1 = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result1);
		if($que_no != $count){
			$que_no= $que_no+1;
			setcookie('QuestionNo',$que_no,time() +86400, '/');
		}
		$sql1 = "Select Answer from $qtable where Question_no = $que_no";
		$r = mysqli_query($conn,$sql1);
		if(mysqli_num_rows($r) > 0){
			$answer = mysqli_fetch_array($r);
			setcookie('answer',$answer[0],time() +86400, '/');
		}
		else{
			setcookie('answer','o5',time() +86400, '/');
		}
		header('Location: ../pages/student/quiz.php');
		
	}

	if(isset($_POST['previous'])){
		$que_no = $_COOKIE['QuestionNo'];
		if($que_no != 1){
			$que_no= $que_no - 1;
			echo $que_no;
			setcookie('QuestionNo',$que_no,time() +86400, '/');
		}
		$qtable = $_COOKIE['qtablename'];
		$sql2 = "Select Answer from $qtable where Question_no = $que_no";
		$r2 = mysqli_query($conn,$sql2);
		if(mysqli_num_rows($r2) > 0){
			$answer = mysqli_fetch_array($r2);
			setcookie('answer',$answer[0],time() +86400, '/');
		}
		else{
			setcookie('answer','o5',time() +86400, '/');
		}
		header('Location: ../pages/student/quiz.php');
		
	}

?>