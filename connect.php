<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// Include config file
session_start();


define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','cake');
$conn =mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($myConnection)); //Database connection
$db_select = mysqli_select_db($conn,DB_NAME)or die(mysqli_error($myConnection));
?>





