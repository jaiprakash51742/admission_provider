
<?php 
include_once('config.php');
if(empty($_SESSION['username']))
{
	session_destroy();
	header("location:../index.php");
}
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>:: Student Record ::</title>
      <meta charset="utf-8"/>
      <link rel="icon" href="https://www.admissionproviders.com/img/gallery/admission-providers.png" type="image/gif"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="Paging/js/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script src="Paging/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <link href="Paging/CSS/dataTables.jqueryui.css" rel="stylesheet" />
      <script src="paging.js"></script>
      <link rel="stylesheet" type="text/css" href="css/panel.css"/>
   </head>
   <body>
      <div class="container text-center "><br>	
         <div class="row">
            <div class="col-md-12">
               <div class="text-right">
			   <a href="../displayalldata.php" class="btn btn-success mb-5">New Data</a> <a href="logout.php" class="btn btn-primary mb-5">Logout</a>	
			   </div>
               <div class="panel with-nav-tabs panel-primary">
                  <div class="panel-heading">
                     <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1primary" data-toggle="tab">Quick Enquiry</a></li>
                        <li><a href="#tab2primary" data-toggle="tab">Apply Now</a></li>
                     </ul>
                  </div>
                  <div class="panel-body">
                     <div class="tab-content">
					 <b>Old Data List</b>
                        <div class="tab-pane fade in active" id="tab1primary">
                           <table class="example table mb-4 responsive-table table-bordered bg-white table-hover">
                              <thead class="thead-light2">
                                 <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col" class="text-center">Email</th>
                                    <th scope="col" class="text-center">Phone</th>
                                    <th scope="col" class="text-center">Course</th>
                                    <th scope="col" class="text-center">Message</th>
                                    <th scope="col" class="text-center">Date</th>
                                 </tr>
                              </thead>
                              <tbody class="newslettertab">
                                 <?php 
                                    $sql="select * from enquirymaster order by Id desc";
                                    $query=mysqli_query($con,$sql);
                                    $p=1;
                                    while($row=mysqli_fetch_array($query))
									{
                                    ?>
                                 <tr>
                                    <td><?php echo $p;   ?></td>
                                    <td><?php echo $row['Name'] ?></td>
                                    <td><?php echo $row['Email'] ?></td>
                                    <td><?php echo $row['PhoneNo'] ?></td>
                                    <td><?php echo $row['Course'] ?></td>
                                    <td><?php echo $row['Message'] ?></td>
                                    <td><?php echo $row['Entrydate'] ?></td>
                                 </tr>
                                 <?php $p++; } ?>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane fade" id="tab2primary">
                           <table class="example table mb-4 responsive-table table-bordered bg-white table-hover">
                              <thead class="thead-light2">
                                 <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Father Name</th>
                                    <th class="text-center">Contact</th>
                                    <th class="text-center">State</th>
                                    <th class="text-center">District</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Action</th>
                                 </tr>
                              </thead>
                              <tbody class="newslettertab">
                                 <?php include_once('config.php');
                                    $sql="SELECT * from applynow order by Id desc";
                                    $query=mysqli_query($con,$sql);
                                    $p=1;
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                 <tr>
                                    <td><?php echo $p;?></td>
                                    <td><?php echo $row['StudentName'] ?></td>
                                    <td><?php echo $row['FatherName'] ?></td>
                                    <td><?php echo $row['StudentContact'] ?></td>
                                    <td><?php echo $row['State']   ?></td>
                                    <td><?php echo $row['District']   ?></td>
                                    <td><?php echo $row['Entrydate'] ?></td>
                                    <td><a target="blank" class="btn btn-primary" href="view.php?id=<?php echo $row['Id'] ?>">View</a></td>
                                 </tr>
                                 <?php $p++; } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

