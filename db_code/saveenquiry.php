<?php
	include 'config.php';
	$txtenqname=$_POST['txtenqname'];
  	$txtenqmail=$_POST['txtenqmail'];
  	$txtenqphone=$_POST['txtenqphone'];
  	$ddlenqcourse=$_POST['ddlenqcourse'];
  	$txtenqmessage=$_POST['txtenqmessage'];
	$EnqDate = date('d-m-Y');
	
	$sql1="SELECT * FROM enquirymaster_new WHERE PhoneNo='$txtenqphone'";
	$qry1=mysqli_query($con,$sql1);
	$counts=mysqli_num_rows($qry1);
	if ($counts == 0)
	{
		$sql = "INSERT INTO enquirymaster_new (Name,Email,PhoneNo,Course,Message,Entrydate) VALUES ('$txtenqname','$txtenqmail','$txtenqphone','$ddlenqcourse','$txtenqmessage','$EnqDate')";
		if(mysqli_query($con,$sql))
		{
			echo json_encode(array("statusCode"=>200));
		}
		else
		{
			echo json_encode(array("statusCode"=>201));
		}
	}
	else
	{
		echo json_encode(array("statusCode"=>202));
	}
?>