<?php
	include 'config.php';
	$txtenqname=$_POST['txtenqname'];
  	$txtenqmail=$_POST['txtenqmail'];
  	$txtenqphone=$_POST['txtenqphone'];
  	$ddlenqcourse=$_POST['ddlenqcourse'];
  	$txtenqmessage=$_POST['txtenqmessage'];
	$EnqDate = date('d-m-Y');
  
  	$sql = "INSERT INTO enquirymaster_new (Name,Email,PhoneNo,Course,Message,Entrydate) VALUES ('$txtenqname','$txtenqmail','$txtenqphone','$ddlenqcourse','$txtenqmessage','$EnqDate')";
	if(mysqli_query($con,$sql))
	{
		echo json_encode(array("statusCode"=>200));
	}
	else
	{
		echo json_encode(array("statusCode"=>201));
	}
?>