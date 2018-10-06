<?php
	include "dbh.inc.php";
	session_start();
	if(isset($_GET['questno'])){
        $updatequestion = $_GET['questno'];
        setcookie('questno',$_GET['questno'],time() +86400, '/');
        header('Location: ../pages/teacher/updatequiz.php');
    }
    
?>