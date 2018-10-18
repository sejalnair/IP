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
					setcookie('class',$_SESSION['Class'],time() +86400, '/');
					setcookie('sid',$_SESSION['Sid'],time() +86400, '/');

					$class=$_SESSION['class'];
					$subject = 'maths1';
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
					}else if(mysqli_num_rows($result) === 0 ) {
						setcookie('examname'," ",time() +86400, '/');
						setcookie('title'," ",time() +86400, '/');
						setcookie('subtitle'," ",time() +86400, '/');
						header('Location: ../pages/student/home.php');
					}
					

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