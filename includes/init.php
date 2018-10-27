<?php
    include 'dbh.inc.php';
	$class = $_COOKIE['class'];
    $subject = 'maths1';
    $sql = "select * from $class where Subject= '$subject'";
    $result = mysqli_query($conn,$sql);
    echo $sql;
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
            }
            else{
				setcookie('examname'," ",time() +86400, '/');
				setcookie('title'," ",time() +86400, '/');
				setcookie('subtitle'," ",time() +86400, '/');
				setcookie('qtablename'," ",time() +86400, '/');
				header('Location: ../pages/student/home.php');
			}
			
		}
	}
	else{
		// setcookie('examname'," ",time() +86400, '/');
		setcookie('title'," ",time() +86400, '/');
		setcookie('subtitle'," ",time() +86400, '/');
		// setcookie('qtablename'," ",time() +86400, '/');
		header('Location: ../pages/student/home.php');
	}
?>