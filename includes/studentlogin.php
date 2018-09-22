<?php
	include "dbh.inc.php";
	session_start();
	if($conn){
		if(isset($_POST['submit'])){
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			$password = mysqli_real_escape_string($conn,$_POST['password']);
			$sql = "select * from student_login where EmailId='$email' and Password='$password';";
			$result = mysqli_query($conn,$sql);

			if(mysqli_num_rows($result) === 1){
				while($row = mysqli_fetch_assoc($result)){
					$_SESSION['Sid'] = $row['Sid'];
					$_SESSION['Class'] = $row['Class'];
					$_SESSION['Rollno'] = $row['Rollno'];
					$_SESSION['Name'] = $row['Name'];
					$_SESSION['EmailId'] = $row['EmailId'];
					header("Location: ../student/home.php");
 				}
			}else{
				echo '<script language="javascript">';
				echo 'alert("Invalid Username or Password")';
				echo '</script>';
			}
		}
	}
?>