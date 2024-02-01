<?php
include('config.php');
 $name=$_POST['name_mo'];
$email=$_POST['email_mo'];
$mobile=$_POST['number_mo'];
$course=$_POST['course_mo'];
$message=$_POST['message_mo'];

  $qry="INSERT INTO `indexmobile`(`name`, `email`, `phone`, `course`, `message`) VALUES ('$name','$email','$mobile','$course','$message')";
if(mysqli_query($connect,$qry)){
  		$data['success']=true;
  	}
  		else{
		$data['success']=false;
	}

	echo json_encode($data);


?>



 