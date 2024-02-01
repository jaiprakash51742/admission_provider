<?php 
include_once('config2.php');
if(empty($_SESSION['username']))
{
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>:: Student Record | www.openstudy.org.in ::</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap.min.css">
</head>
  <style type="text/css">
  body{
        background: #386f74;
    color: #ffff;
  }
</style>
<body>
<div class="">
    <nav class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="displayalldata.php">www.admissionproviders.com </a></li>
                <li><a href="TheAdmProvider.php">www.theadmissionprovider.com </a></li>
                <li class="active" ><a href="Open_study.php">www.openstudy.org.in</a></li>
                <li><a href="AdmConsultancy.php">www.admissionconsultancy.org</a></li>
                <li><a href="AdmMantraContact.php">www.admissionmantra.org</a></li>
                 
            </ul>
             
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php" style='background:red; color:white'>Logout</a></li>
            </ul>
        </div>
    </nav>
</div> 	<br>
<div class="container" style='color:black; background:#fff;'> 
   <h2 class='text-center bg-danger' style='color:black'>Student Record | www.openstudy.org.in<span></h2>
   <div class="table-responsive">
    <table id="example" class="table table-bordered">
    <thead>
      <tr style='color:black;'>
        <th>#</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email Id</th>
        <th>Program</th>        
        <th>Course</th>        
        <th>Type</th>        
        <th>Message</th>        
        <th>Date & Time</th>    	
      </tr>
    </thead>
    <tbody>
      <?php  
        $sql = "Select * from opne_study_enquiry";
        $qry = mysqli_query($con,$sql);
        $i = 1;
        while($row= mysqli_fetch_assoc($qry))
        {
	  ?>
	   <tr style='color:black;'>
        <td class='text-center'><?php  echo $i;  ?></td>
        <td><?php echo $row['Name'];  ?> </td>
        <td><?php echo $row['PhoneNo'];  ?> </td>
        <td><?php echo $row['Email'];  ?> </td>
        <td><?php echo $row['Program'];  ?> </td> 
        <td><?php echo $row['Course'];  ?></td>        
        <td><?php echo $row['CourseType'];  ?></td>        
        <td><?php echo $row['Message'];  ?></td>        
        <td><?php echo $row['Entrydate'];  ?></td>        
      </tr>
	  <?php
      $i++;  
	  }

         ?>
    </tbody>
  </table>
   
   </div>
 

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.colVis.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
} );
</script>
</body>
</html>