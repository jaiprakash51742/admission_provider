<?php
include('config.php');
 $name=$_POST['name_i'];
$email=$_POST['email_i'];
$mobile=$_POST['phone_i'];
$course=$_POST['course_i'];
$message=$_POST['message_i'];

 $qry="INSERT INTO `enquiry`(`name`, `email`, `phone`, `course`, `message`) VALUES ('$name','$email','$mobile','$course','$message')";
if(mysqli_query($connect,$qry)){
  		$data['success']=true;
  	}
  		else{
		$data['success']=false;
	}

	echo json_encode($data);
?>



 