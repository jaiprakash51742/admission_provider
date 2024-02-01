<?php 
include_once('config6.php'); 
if(empty($_SESSION['username']))
{
  header("location:../index.php");
}
$page='adm_consultant';
unset($_SESSION['backlink']);
$_SESSION['backlink']='AdmConsultant.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>:: Student Record | www.admissionconsultant.org ::</title>
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
<div class="container" style='color:black; background:#fff;'> 
   <h2 class='text-center bg-danger' style='color:black'>Student Record | www.admissionconsultant.org<span></h2>
   <div class="table-responsive">
    <table id="example" class="table table-bordered">
    <thead>
      <tr style='color:black;'>
        <th>#</th>
        <th>Name</th>
        <th>Email Id</th>  
        <th>Mobile no.</th>
        <th>Course</th>          
        <th>Message</th>              
        <th>Date  </th>        
        <th>Action  </th>        
      </tr>
    </thead>
    <tbody>
      <?php  
        $sql = "Select * from adm_consultant_model order by id DESC";
        $qry = mysqli_query($conn,$sql);
        $i = 1;
        while($row= mysqli_fetch_assoc($qry))
        {
	  ?>
	   <tr  style='color:black;'>
        <td class='text-center'><?php  echo $i;  ?></td>
        <td><?php echo $row['name'];  ?> </td>
        <td><?php echo $row['email'];  ?> </td>
        <td><?php echo $row['mobile'];  ?> </td> 
        <td><?php echo $row['course'];  ?></td>             
        <td><?php echo $row['message'];  ?></td>        
        <td><?php echo $row['EntryDate'];  ?></td>    
		<td class='text-center'>
		<a href="deleteAdmConsultant.php?id=<?= $row['id'] ?>" class='bg-danger' style='background:red; color:white; padding:5px 10px; font-weight:bold;'>Delete</a>
		</td>         
      </tr>
          <?php
      $i++;  }

         ?>
    </tbody>
  </table>
   
   </div>
 </div><br><br>
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
