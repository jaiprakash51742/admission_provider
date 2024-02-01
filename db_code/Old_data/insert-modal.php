<?php
include('config.php');
 $name=$_POST['name_m'];
$email=$_POST['email_m'];
$mobile=$_POST['number_m'];
$course=$_POST['select_m'];
$message=$_POST['message_m'];

 $qry="INSERT INTO `modal`(`name`, `email`, `phone`, `course`, `message`) VALUES ('$name','$email','$mobile','$course','$message')";
if(mysqli_query($connect,$qry)){
  		$data['success']=true;
  	}
  		else{
		$data['success']=false;
	}

	echo json_encode($data);


?>



 