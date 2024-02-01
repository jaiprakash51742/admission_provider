<?php
include_once('config_bangalore.php'); 
$backlink=$_SESSION['backlink'];
$id=$_GET['id'];
if(empty ($id))
{
	header ("location:$backlink");	
}
else
{
	$q2 = "delete from admission_2022_23 where id ='$id'";
	if (!mysqli_query($conn, $q2)) 
	{
		echo "Error description:  " . $q2 . "<br>" . mysqli_error($conn); 
	}
	else
	{
		header ("location:$backlink");	
	} 
} 
?>