<?php
include('config.php');
 $name=$_POST['name_c'];
$email=$_POST['email_c'];
$mobile=$_POST['phone_c'];
$course=$_POST['select_c'];
$message=$_POST['message_c'];

  $qry="INSERT INTO `contactindex`(`name`, `email`, `phone`, `course`, `message`) VALUES ('$name','$email','$mobile','$course','$message')";
if(mysqli_query($connect,$qry)){
  		$data['success']=true;
  	}
  		else{
		$data['success']=false;
	}

	echo json_encode($data);


?>



 