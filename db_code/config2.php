<?php 
/*
$host="localhost";
$user="admncom_data";
$pass="Msj@625914";
$database="admncom_data";
$connect=mysqli_connect($host,$user,$pass,$database);
if (!$connect) {
	die("Database Not Connected");
}
if (!isset($_SESSION)) {
	session_start();
}
 ?>


 <?php 
$host="localhost";
$user="root";
$pass="";
$database="admissionproviders";
$connect=mysqli_connect($host,$user,$pass,$database);
if (!$connect) {
	die("Database Not Connected");
}

*/ 
   session_start();  
   $servername="localhost";
   $username="provider_opne_study_user";
   $password="Shish@2022";
   $db_name="provider_open_study";  
   $con=mysqli_connect($servername,$username,$password,$db_name);
   if (mysqli_connect_errno())
   {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
   } 
foreach($_REQUEST as $var => $val)
$$var = trim(strip_tags($val));
?>
 