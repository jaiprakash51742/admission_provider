<?php
include('config.php');
 $name=$_POST['name_reg'];
$email=$_POST['email_reg'];
$mobile=$_POST['number_reg'];
$course=$_POST['select_reg'];
$message=$_POST['message_reg'];

 $qry="INSERT INTO `insertregistration`(`name`, `email`, `phone`, `course`, `message`) VALUES ('$name','$email','$mobile','$course','$message')";
if(mysqli_query($connect,$qry)){
  		$data['success']=true;
  	}
  		else{
		$data['success']=false;
	}

	echo json_encode($data);


?>



 