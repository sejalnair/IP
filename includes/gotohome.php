<?php
    include "dbh.inc.php";
    session_start();
    if(isset($_POST['home'])){
        $tablename = $_COOKIE['qtablename'];
        $sql = "drop table $tablename";
        mysqli_query($conn,$sql);
        setcookie('examname'," ",time() +86400, '/');
        setcookie('title'," ",time() +86400, '/');
        setcookie('subtitle'," ",time() +86400, '/');
        setcookie('qtablename'," ",time() +86400, '/');
        header('Location: ../pages/student/home.php');
        header('Location: ../pages/student/home.php');
    }
?>