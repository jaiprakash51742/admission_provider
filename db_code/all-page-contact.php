<?php
include('config.php');
 $name=$_POST['name_all'];
$email=$_POST['email_all'];
$mobile=$_POST['number_all'];
$course=$_POST['select_all'];
$message=$_POST['message_all'];

  $qry="INSERT INTO `allpagecontact`(`name`, `email`, `phone`, `course`, `message`) VALUES ('$name','$email','$mobile','$course','$message')";
if(mysqli_query($connect,$qry)){
  		$data['success']=true;
  	}
  		else{
		$data['success']=false;
	}

	echo json_encode($data);


?>



 