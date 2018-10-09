<?php
 /*if(isset($_POST['createqz'])){
	setcookie('class',$_POST['class'],time() +86400, '/');
	setcookie('subject',$_POST['subject'],time() +86400, '/');
	setcookie('time',$_POST['exam_time'],time() +86400, '/');
	setcookie('date',$_POST['exam_date'],time() +86400, '/');
	setcookie('title',$_POST['title'],time() +86400, '/');
	setcookie('subtitle',$_POST['subtitle'],time() +86400, '/');

	$class = $_POST['class'] ;
	$subject = $_POST['subject'];
	$date = $_POST['exam_date'];
	$time = $_POST['exam_time'] ;
	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];*/

$sql="SELECT Title,Subtitle FROM d20 where id=1";
if ($result=mysqli_query($conn,$sql)) {
  // Fetch one and one row
	  while ($row=mysqli_fetch_row($result))	{
		echo"<center><font size='5'><b>QUIZ TITLE: </b></font><label>".$row[0]."</label></center><br>";
		echo"<center><font size='5'><b>QUIZ SUBTITLE: </b></font><label>".$row[1]."</label></center>";
	
}
  // Free result set
  mysqli_free_result($result);
}
 
?>