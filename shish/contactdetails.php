<?php 
include_once('config.php');
if(empty($_SESSION['username']))
{
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>www.admissionproviders.com | Admin</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap.min.css">
</head>
<body>
  <style type="text/css">
  body{
        background: #386f74;
    color: #ffff;
  }
</style><br><br>
<div class="container" style='color:black; background:#fff;'><br>
<a style="float:right;" class="btn btn-success" href="logout.php">Logout</a></span><br>
   <h2 class='text-center bg-danger' style='color:black'>www.admissionproviders.com | Records<span></h2>       
   <div class="table-responsive">
    <table id="example" class="table table-bordered">
    <thead>
      <tr>
         <th>#</th>
        <th>Name</th>
        <th>Email Id</th>
        <th>Mobile no.</th>
        <th>Course</th> 
        <th>Message</th> 
        <th>Date</th>         
      </tr>
    </thead>
    <tbody>
      <?php  
        $sql = "Select * from enquirymaster_new order by id DESC";
        $qry = mysqli_query($conn,$sql);
        $i = 1;
        while($row= mysqli_fetch_assoc($qry))
        {
          ?>
           <tr>
        <td class='text-center'><?php  echo $i;  ?></td>
        <td><?php echo $row['Name'] ?></td>
		<td><?php echo $row['Email'] ?></td>
		<td><?php echo $row['PhoneNo'] ?></td>
		<td><?php echo $row['Course'] ?></td>
		<td><?php echo $row['Message'] ?></td>
		<td><?php echo $row['Entrydate'] ?></td>        
      </tr>
          <?php
      $i++;  }

         ?>
    </tbody>
  </table>
   
   </div>
</div><br><br><br><br><br><br>

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
