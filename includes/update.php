<?php
	include "dbh.inc.php";
	session_start();
	if(isset($_GET['questno'])){
        $updatequestion = $_GET['questno'];
    }
    header("Location: ..teacher/updatequiz.php?questno=$updatequestion");
?>