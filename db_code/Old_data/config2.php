<?php 
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
 ?>