<?php 
    include "dbh.inc.php";
    session_start();
    
    if(isset($_POST['quest'])){
        $tablename = $_POST['quest'];
        setcookie('displaytable',$_POST['quest'],time() +86400, '/');
        header("Location: ../pages/teacher/display.php");
    }
    if(isset($_POST['back'])){
        header("Location: ../pages/teacher/home.php");
    }
    
?>