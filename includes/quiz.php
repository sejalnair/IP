<?php
	include "dbh.inc.php";
	session_start();
	if(isset($_POST["startqz"])){
        header('Location: ../pages/student/quiz.php');
    }