<?php
session_start();
include "dbh.inc.php";

$from_time=date('Y-m-d H:i:s');
$to_time = $_SESSION['end_time'];

$timefirst = strtotime($from_time);
$timesceond = strtotime($to_time);

$difference = $timesceond - $timefirst;

echo gmdate("i:s",$difference);



?>