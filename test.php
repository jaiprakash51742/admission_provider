<?php

session_start();
error_reporting(0);
$_SESSION['name']='Admin';

$nm = $_SESSION['name'];
echo  '<br> Name = '.$nm;
?>