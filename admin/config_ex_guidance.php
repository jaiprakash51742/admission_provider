<?php 
error_reporting(0);
session_start();  
$host="54.37.222.50";
$user="examguid_user";
$pass="ujjain@5254";
$database="examguid_db";  
$con=mysqli_connect($host,$user,$pass,$database);
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

