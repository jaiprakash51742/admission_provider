<?php 
include_once('config.php');
if(empty($_SESSION['username']))
{
	header("location:../index.php");
}
$page='exam_guidance';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>:: Student Record | www.examguidance.co.in::</title>
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
  <div class=' '><br>
	<a style="float:left;" class="btn btn-success mr-4" href="Exam_Guidance_Enquiry.php">Contact Details</a> 
	<a style="float:left;" class="btn btn-warning" href="Exam_Guidance_Reg.php">Regiser Details</a>
	<a style="float:left;" class="btn btn-primary" href="Exam_Guidance_Submit.php">Enquiry Details</a> 
  </div><br> 
   <h2 class='text-center bg-danger' style='color:black'>Student Record (Enquiry) | www.examguidance.co.in<span></h2>
   <div class="table-responsive">
    <table id="example" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Mobile no.</th>
        <th>Email</th>
        <th>State</th>
        <th>Date</th>  	
      </tr>
    </thead>
    <tbody>
      <?php  
        $sql = "Select * from  submit_data order by id DESC";
        $qry = mysqli_query($con,$sql);
        $i = 1;
        while($row= mysqli_fetch_assoc($qry))
        {
          ?>
           <tr>
        <td class='text-center'><?php  echo $i;  ?></td>
        <td><?php echo $row['name'];  ?> </td>
        <td><?php echo $row['mobile'];  ?> </td>
        <td><?php echo $row['email'];  ?></td>          
        <td><?php echo $row['state'];  ?></td>          
        <td><?php echo $row['dd'];  ?></td>          
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
