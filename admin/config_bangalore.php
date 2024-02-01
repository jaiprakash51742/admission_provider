<?php 
error_reporting(0);
session_start();  
$host="localhost";
$user="provider_bangalore_user";
$pass="Shish@2022";
$database="provider_bangalore";  
$conn=mysqli_connect($host,$user,$pass,$database);
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

