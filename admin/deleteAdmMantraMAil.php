<?php
include_once('config3.php');
$backlink=$_SESSION['backlink'];
$id=$_GET['id'];
if(empty ($id))
{
	header ("location:$backlink");	
}
else
{
	$q2 = "delete from mantra_mail where id ='$id'";
	if (!mysqli_query($con, $q2)) 
	{
		echo "Error description:  " . $q2 . "<br>" . mysqli_error($conn); 
	}
	else
	{
		header ("location:$backlink");	
	} 
} 
?>