<?php
$mysql_host = 'localhost';
$mysql_user = 'ppatel155';
$mysql_pass = 'ppatel155';
$mysql_db = 'ppatel155';

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>