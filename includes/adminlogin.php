<?php
	include "dbh.inc.php";
	session_start();
	if($conn){
		if(isset($_POST['submit'])){
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			$password = mysqli_real_escape_string($conn,$_POST['password']);
			$sql = "select * from admin_login where EmailId='$email' and Password='$password';";
			$result = mysqli_query($conn,$sql);

			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					$_SESSION['Aid'] = $row['Aid'];
					$_SESSION['EmailId'] = $row['EmailId'];
					$_SESSION['Password'] = $row['Password'];
            
                    header("Location: ../pages/admin/home.php");
				}
			}else{
				echo '<script language="javascript">';
				echo 'alert("Invalid Username or Password")';
				echo '</script>';
			}
		}
	}
?>