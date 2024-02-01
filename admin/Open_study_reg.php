<?php 
include_once('config_open_study.php');
if(empty($_SESSION['username']))
{
	header("location:../index.php");
}
$page='opne_study';
unset($_SESSION['backlink']);
$_SESSION['backlink']='Open_study_reg.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>:: Student Record | www.openstudy.org.in ::</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
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
<?php include_once ('sidebarmenu.php');?> 
<div class="main"><br>
<div class="container" style='color:black; background:#fff;'> <br>
   <a style="float:left;" class="btn btn-success mr-4" href="Open_study.php">Enquiry Details</a> 
	<a style="float:left;" class="btn btn-primary" href="Open_study_reg.php">Registration Details</a>
	<a style="float:left;" class="btn btn-warning" href="Open_study_interest.php">Interest Details</a>
   
   <br>
   
  <h2 class='text-center bg-danger' style='color:black'>Student Record (Registration) | www.openstudy.org.in<span></h2>
   <div class="table-responsive">
    <table id="example" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile no.</th>      
        <th>Date & Time</th>         	
        <th>Action</th>         	
      </tr>
    </thead>
    <tbody>
      <?php  
        $sql = "Select * from opne_study_reg order by id DESC";
        $qry = mysqli_query($con,$sql);
        $i = 1;
        while($row= mysqli_fetch_assoc($qry))
        {
          ?>
           <tr>
        <td class='text-center'><?php  echo $i;  ?></td>
        <td><?php echo $row['Name'];  ?> </td>
        <td><?php echo $row['Email'];  ?> </td>
        <td><?php echo $row['PhoneNo'];  ?> </td> 
        <td><?php echo $row['Entrydate'];  ?></td> 
		<td class='text-center'>
		<a href="deleteOpenStudyReg.php?id=<?= $row['id'] ?>" class='bg-danger' style='background:red; color:white; padding:5px 10px; font-weight:bold;'>Delete</a>
		</td>          
      </tr>
          <?php
      $i++;  
	  }

         ?>
    </tbody>
  </table>
   
   </div>
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
