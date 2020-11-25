<?php 
######################################################
 //all right recived to mohamed abdel maksoud
 //email: medolink@gmail.com
######################################################
//-----------------------------------------------
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'feedback';
$link = mysqli_connect($host, $user, $pass, $db)  or die ("no database connection");
mysqli_set_charset($link, "utf8");
//-----------------------------------------------
extract($_GET);
extract($_POST);

?>

