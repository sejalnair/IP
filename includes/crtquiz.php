<?php
	include "dbh.inc.php";
	if($conn){
		if(isset($_POST['startqz'])){
			$email = mysqli_real_escape_string($conn,$_POST['Title']);
			$password = mysqli_real_escape_string($conn,$_POST['Subtitle']);
			$sql = "select Title,Subtitle from d15;";
			$result = mysqli_query($conn,$sql);

			if(mysqli_num_rows($result) === 1){
				while($row = mysqli_fetch_assoc($result)){
					echo "Title: " . $row["Title"]. " - Subtitle: " . $row["Subtitle"]. "<br>";
          		 	$_SESSION['Title'] = $row['Title'];
                    $_SESSION['Subtitle'] = $row['Subtitle'];
					
					//header("Location: ../student/home.php");
					}
				}	
			}
	}
?>