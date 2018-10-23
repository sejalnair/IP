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
		$res = mysqli_fetch_array($r);
		if(mysqli_num_rows($r) === 0){
			if($ans != "" ){
				$q = "Insert into $qtable values($que_no,'$ans',1)";
			}else{
				$q = "Insert into $qtable values($que_no,'$ans',2)";
			}
		}
		else{
			if($res['State']== 2){
				$q = "Update $qtable set Answer='$ans', State=1 where Question_no=$que_no";
			}
			else{
				$q = "Update $qtable set Answer='$ans', State=3 where Question_no=$que_no";
			}
		}
		
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
		$ans =  $_POST['option'];
		$qtable = $_COOKIE['qtablename'];
		
		$query = "Select * from $qtable where Question_no=$que_no";
		$r = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($r) === 0){
			if($ans != ""){
				$q = "Insert into $qtable values($que_no,'$ans',1)";
			}else{
				$q = "Insert into $qtable values($que_no,'$ans',2)";
			}
		}
		else{
			if($ans != ""){
				$q = "Update $qtable set Answer='$ans' where Question_no=$que_no";
			}
		}
		print_r($q);
		mysqli_query($conn,$q);
		
		if($que_no != 1){
			$que_no= $que_no - 1;
			setcookie('QuestionNo',$que_no,time() +86400, '/');
		}
		$qtable = $_COOKIE['qtablename'];
		$sql2 = "Select Answer from $qtable where Question_no = $que_no";
		$r2 = mysqli_query($conn,$sql2);
		if(mysqli_num_rows($r2) > 0){
			$answer = mysqli_fetch_array($r2);
			print_r($answer);
			setcookie('answer',$answer[Answer],time() +86400, '/');
		}
		else{
			setcookie('answer','o5',time() +86400, '/');
		}
		header('Location: ../pages/student/quiz.php');
		
	}

	if(isset($_POST['bookmark'])){
		$que_no = $_COOKIE['QuestionNo'];
		$qtable = $_COOKIE['qtablename'];
		$sql = "Select State from $qtable where Question_no = $que_no";
		$r = mysqli_query($conn,$sql);
		
		$r1= mysqli_fetch_array($r);
		
		if(mysqli_num_rows($r)>0){
			if( $r1['State'] == 1){
				$q = "Update $qtable set State=3 where Question_no=$que_no";
			}
			else{
				$q = "Update $qtable set State=4 where Question_no=$que_no";
			}
			
		}else{
			$q = "Insert into $qtable values ($que_no,'',4)";
		}
		mysqli_query($conn,$q);
		$sql2 = "Select Answer from $qtable where Question_no = $que_no";
		$r2 = mysqli_query($conn,$sql2);
		if(mysqli_num_rows($r2) > 0){
			$answer = mysqli_fetch_array($r2);
			print_r($answer);
			setcookie('answer',$answer[0],time() +86400, '/');
		}
		else{
			setcookie('answer','o5',time() +86400, '/');
		}
		header('Location: ../pages/student/quiz.php');
	}

	if(isset($_POST['unbookmark'])){
		$que_no = $_COOKIE['QuestionNo'];
		$qtable = $_COOKIE['qtablename'];
		$sql = "Select State from $qtable where Question_no = $que_no";
		$r = mysqli_query($conn,$sql);
		print_r($r);
		$r1= mysqli_fetch_array($r);
		print_r($r1);
		if(mysqli_num_rows($r)>0){
			if( $r1['State'] ==	3 ){
				$q = "Update $qtable set State=1 where Question_no=$que_no";
			}
			else{
				$q = "Update $qtable set State=2 where Question_no=$que_no";
			}
			print_r($q);
		}
		mysqli_query($conn,$q);
		$sql2 = "Select Answer from $qtable where Question_no = $que_no";
		$r2 = mysqli_query($conn,$sql2);
		if(mysqli_num_rows($r2) > 0){
			$answer = mysqli_fetch_array($r2);
			print_r($answer);
			setcookie('answer',$answer['Answer'],time() +86400, '/');
		}
		else{
			setcookie('answer','o5',time() +86400, '/');
		}
		header('Location: ../pages/student/quiz.php');
	}
?>