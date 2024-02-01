<?php
	include 'config.php';
	$stdname=$_POST['stdname'];
  	$stdfname=$_POST['stdfname'];
  	$stdmname=$_POST['stdmname'];
  	$stdfoccupation=$_POST['stdfoccupation'];
  	$stdmoccupation=$_POST['stdmoccupation'];
  	$ddlcategory=$_POST['ddlcategory'];
  	$txtdob=$_POST['txtdob'];
  	$ddlappcourse=$_POST['ddlappcourse'];
  	$ddlgender=$_POST['ddlgender'];
  	$ddlincome=$_POST['ddlincome'];
  	$stcontact=$_POST['stcontact'];
  	$stparentcontact=$_POST['stparentcontact'];
  	$txtaddress=$_POST['txtaddress'];
  	$txtcity=$_POST['txtcity'];
  	$txtdistrict=$_POST['txtdistrict'];
  	$ddlapplystate=$_POST['ddlapplystate'];
  	$txtpincode=$_POST['txtpincode'];
  	$txtexamname=$_POST['txtexamname'];
  	$txtmarks=$_POST['txtmarks'];
  	$txtrank=$_POST['txtrank'];
  	$ddlloc1=$_POST['ddlloc1'];
  	$ddlloc2=$_POST['ddlloc2'];
  	$ddlloc3=$_POST['ddlloc3'];
	$EnqDate = date('d-m-Y');

	$maxsize=2097152;
	if(isset($_FILES['file1']['name']))
	{
	    $test = explode('.', $_FILES['file1']['name']);
	    $extension = end($test);    
	    $name = rand(10000,99999).'.'.$extension;

	    $location = 'Photo/'.$name;
	    move_uploaded_file($_FILES['file1']['tmp_name'], $location);
	}
	else
	{
		$location = "";
	}
	if(isset($_FILES['file2']['name']))
	{
	    $test = explode('.', $_FILES['file2']['name']);
	    $extension = end($test);    
	    $name = rand(10000,99999).'.'.$extension;
	    $location2 = 'AdmitCard/'.$name;
	    move_uploaded_file($_FILES['file2']['tmp_name'], $location2);
	}
	else
	{
		$location2 = "";
	}
  	if(isset($_FILES['file3']['name']))
	{
	    $test = explode('.', $_FILES['file3']['name']);
	    $extension = end($test);    
	    $name = rand(10000,99999).'.'.$extension;
	    $location3 = 'Marksheet/'.$name;
	    move_uploaded_file($_FILES['file3']['tmp_name'], $location3);
	}
	else
	{
		$location3 = "";
	}
  	$sql = "INSERT INTO applynow_new (StudentName,FatherName,MotherName,FatherOccupation,MotherOccupation,Category,Dob,Course,Gender,Income,StudentContact,ParentContact,Address,City,District,State,Pincode,ExamName,Marks,Rank,Loc1,Loc2,Loc3,StdPhoto,AdmitCard,Marksheet,Entrydate) VALUES ('$stdname','$stdfname','$stdmname','$stdfoccupation','$stdmoccupation','$ddlcategory','$txtdob','$ddlappcourse','$ddlgender','$ddlincome','$stcontact','$stparentcontact','$txtaddress','$txtcity','$txtdistrict','$ddlapplystate','$txtpincode','$txtexamname','$txtmarks','$txtrank','$ddlloc1','$ddlloc2','$ddlloc3','$location','$location2','$location3','$EnqDate') ";
	if(mysqli_query($con,$sql))
	{
		echo json_encode(array("statusCode"=>200));
	}
	else
	{
		echo json_encode(array("statusCode"=>201));
	}
?>