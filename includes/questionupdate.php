<?php
	include "dbh.inc.php";
    session_start();
    

    if(isset($_POST['updatequestion'])){
        $question =  $_POST['question'];
        $c1 = $_POST['ot1'];
        $c2 = $_POST['ot2'];
        $c3 =  $_POST['ot3'];
        $c4 = $_POST['ot4'];
        $ans =  $_POST['option'];
        $tablename = $_COOKIE['tablename'];
        $questionno = $_COOKIE['questno'];
        $sql = "update $tablename set Question = '$question' , C1 = '$c1', C2= '$c2', C3= '$c3', C4='$c4', Answer= '$ans' where Question_no = $questionno;";
        mysqli_query($conn,$sql);
        header('Location: ../pages/teacher/createquiz.php');
    }
    if(isset($_POST['back'])){
        header('Location: ../pages/teacher/createquiz.php');
    }
    if(isset($_POST['update'])){
        $question =  $_POST['question'];
        $c1 = $_POST['ot1'];
        $c2 = $_POST['ot2'];
        $c3 =  $_POST['ot3'];
        $c4 = $_POST['ot4'];
        $ans =  $_POST['option'];
        $tablename = $_COOKIE['displaytable'];
        $questionno = $_COOKIE['quest_no'];
        $sql = "update $tablename set Question = '$question' , C1 = '$c1', C2= '$c2', C3= '$c3', C4='$c4', Answer= '$ans' where Question_no = $questionno;";
        mysqli_query($conn,$sql);
        header('Location: ../pages/teacher/display.php');
    }
    if(isset($_POST['backbutton'])){
        header('Location: ../pages/teacher/display.php');
    }
?>