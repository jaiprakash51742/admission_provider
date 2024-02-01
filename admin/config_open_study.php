<?php 
error_reporting(0);
session_start();  
$host="localhost";
$user="provider_opne_study_user";
$pass="Shish@2022";
$db_name="provider_open_study";  
$con=mysqli_connect($host,$user,$pass,$db_name);
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

