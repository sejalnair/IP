<?php
    include "dbh.inc.php";
    session_start();
    if(isset($_POST['home'])){
        $tablename = $_COOKIE['qtablename'];
        $sql = "drop table $tablename";
        mysqli_query($conn,$sql);
        header('Location: ../pages/student/home.php');
    }
?>