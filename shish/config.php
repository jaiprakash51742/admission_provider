<?php 
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Calcutta");
$currentdt= date('d-m-Y h:i:sa');
$servername="localhost";
$username="provider_admissionuser";
$password="Shish@2022";
$db_name="provider_db"; 
/*
$servername="localhost";
$username="root";
$password="";
$db_name="admission_provider"; */
$conn = new mysqli($servername,$username,$password,$db_name);
// Check connection
if (!$conn) {
  echo "<br><br><font color=red size=+2 align=center>Database not connected successfully. Please Contact Service Provider/Web Developer Team </font>";// . $conn -> connect_error;
  exit();
}
foreach($_REQUEST as $var => $val)
$$var = trim(strip_tags($val)); 
 
?>

