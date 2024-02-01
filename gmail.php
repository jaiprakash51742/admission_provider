<?php 
date_default_timezone_set("Asia/Calcutta");
$date=date("d/m/y");
$errors=array();
$data=array();
if (isset($_POST['name_m'])) {
$name=$_POST['name_m'];
$email=$_POST['email_m'];
$number=$_POST['number_m'];
$select=$_POST['select_m'];
$message=$_POST['message_m'];
$bcc='admission.providers@gmail.com';	
}
else if(isset($_POST['name_i'])){
$name=$_POST['name_i'];
$email=$_POST['email_i'];
$number=$_POST['phone_i'];
$select=$_POST['course_i'];
$message=$_POST['message_i'];
$bcc='admission.providers@gmail.com';	
}
else if(isset($_POST['name_mo'])){
$name=$_POST['name_mo'];
$email=$_POST['email_mo'];
$number=$_POST['number_mo'];
$select=$_POST['course_mo'];
$message=$_POST['message_mo'];
$bcc='admission.providers@gmail.com';	
}
else if(isset($_POST['name_all'])){
$name=$_POST['name_all'];
$email=$_POST['email_all'];
$number=$_POST['number_all'];
$select=$_POST['select_all'];
$message=$_POST['message_all'];
$bcc='admission.providers@gmail.com';	
}
else if(isset($_POST['name_reg'])){
$name=$_POST['name_reg'];
$email=$_POST['email_reg'];
$number=$_POST['number_reg'];
$select=$_POST['select_reg'];
$message=$_POST['message_reg'];
$bcc='admission.providers@gmail.com';	
}
else{
$name=$_POST['name_c'];
$email=$_POST['email_c'];
$number=$_POST['phone_c'];
$select=$_POST['select_c'];
$message=$_POST['message_c'];
$bcc='admission.providers@gmail.com';
}
$subject='Quick enquiry Message from THE ADMISSION PROVIDER'.$date;
$message='<table width="100%" border="0" cellpadding="10" cellspacing="1" style="font-family:Arial,Helvetica,sans-serif; font-size:12px;">';
$message .="<tr><td><strong>Name:</strong></td><td>".$name."</td></tr>"; 
$message .="<tr><td><strong>Email:</strong></td><td>".$email."</td></tr>"; 
$message .="<tr><td><strong>Mobile:</strong></td><td>".$number."</td></tr>";
$message .="<tr><td><strong>Course:</strong></td><td>".$select."</td></tr>"; 
$message .="<tr><td><strong>Message:</strong></td><td>".$message."</td></tr>";
$message .="</table>";
$message=stripcslashes($message);
$Header="MIME-version:1.0 \r\n";
$Header .="content-type:text/html; charset=iso-8859-1 \r\n";
$Header .="Form:".$name."<".$email.">";
if(mail($bcc, $subject, $message, $Header))
{
    $data['success']=true;
}
else
{
    $data['success']=false;
}
echo json_encode($data);

?>