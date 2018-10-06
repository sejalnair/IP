<?php
	include "dbh.inc.php";
    session_start();
    
    if(isset($_POST['addquestion'])){
        $question =  $_POST['question'];
        $c1 = $_POST['ot1'];
        $c2 = $_POST['ot2'];
        $c3 =  $_POST['ot3'];
        $c4 = $_POST['ot4'];
        $ans =  $_POST['option'];
        $tablename = $_COOKIE['tablename'];
        $sql = "Insert into $tablename (Question, C1, C2, C3, C4, Answer) values('$question','$c1','$c2','$c3','$c4','$ans');";
        mysqli_query($conn,$sql);
        header('Location: ../pages/teacher/createquiz.php');
    }
?>