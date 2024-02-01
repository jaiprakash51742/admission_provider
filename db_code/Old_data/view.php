<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>:: Print ::</title>
    <style type="text/css">
   .table {
   width: 810px;
   margin: 0 auto;
   border-collapse: collapse;
   }
   .table tr td {
   padding: 6px;
   vertical-align: top;
   border: solid 1px;
   font-family: Arial;
   font-size: 14px;
   }
</style>
<script type="text/javascript">
   function printDiv(divID) {
       var divElements = document.getElementById(divID).innerHTML;
       var oldPage = document.body.innerHTML;
       document.body.innerHTML = "<html><head></head><body>" + divElements + "</body>";
       window.print();
       document.body.innerHTML = oldPage;
   }
</script>
</head>
<body>
<?php
   include_once('config.php');
   $id = $_REQUEST['id'];
   $sql="SELECT * FROM applynow WHERE Id=".$id;
   $qry=mysqli_query($con,$sql);
   $counts=mysqli_num_rows($qry);
   if ($counts>0) {
       $row=mysqli_fetch_array($qry);
       ?>
<div id="printablediv" style="width: 900px; margin: 30px auto;">
   <table class="table">
      <tr>
         <td colspan="4">
            <img src="../img/header.jpg" alt="header-logo"/>
         </td>
      </tr>
      <tr>
         <td colspan="4">
            <h4 style="text-align: center; margin: 0px">PERSONAL DETAILS</h4>
         </td>
      </tr>
      <tr>
         <td style="width: 20%;"><b>Student Name</b></td>
         <td style="width: 30%;"><?php echo $row["StudentName"] ?></td>
         <td style="width: 20%;"><b>Father Name</b></td>
         <td style="width: 30%;"><?php echo $row["FatherName"] ?></td>
      </tr>
      <tr>
         <td><b>Mother Name</b></td>
         <td><?php echo $row["MotherName"] ?></td>
         <td><b>Father Occupation</b></td>
         <td><?php echo $row["FatherOccupation"] ?></td>
      </tr>
      <tr>
         <td><b>Mother Occupation</b></td>
         <td><?php echo $row["MotherOccupation"] ?></td>
         <td><b>Category</b></td>
         <td><?php echo $row["Category"] ?></td>
      </tr>
      <tr>
         <td><b>Date of Birth</b></td>
         <td><?php echo $row["Dob"] ?></td>
         <td><b>Course</b></td>
         <td><?php echo $row["Course"] ?></td>
      </tr>
      <tr>
         <td><b>Gender</b></td>
         <td><?php echo $row["Gender"] ?></td>
         <td><b>Annual Income</b></td>
         <td><?php echo $row["Income"] ?></td>
      </tr>
      <tr>
         <td><b>Student Contact No</b></td>
         <td><?php echo $row["StudentContact"] ?></td>
         <td><b>Parents Contact No</b></td>
         <td><?php echo $row["ParentContact"] ?></td>
      </tr>
      <tr>
         <td colspan="4">
            <h4 style="text-align: center; margin: 0px">ADDRESS DETAILS</h4>
         </td>
      </tr>
      <tr>
         <td><b>Address</b></td>
         <td colspan="3"><?php echo $row["Address"] ?></td>
      </tr>
      <tr>
         <td><b>City</b></td>
         <td><?php echo $row["City"] ?></td>
         <td><b>District</b></td>
         <td><?php echo $row["District"] ?></td>
      </tr>
      <tr>
         <td><b>State</b></td>
         <td><?php echo $row["State"] ?></td>
         <td><b>Pincode</b></td>
         <td><?php echo $row["Pincode"] ?></td>
      </tr>
      <tr>
         <td colspan="4">
            <h4 style="text-align: center; margin: 0px">EXAM DETAILS</h4>
         </td>
      </tr>
      <tr>
         <td><b>Exam Name</b></td>
         <td><?php echo $row["ExamName"] ?></td>
         <td><b>Expected Marks</b></td>
         <td><?php echo $row["Marks"] ?></td>
      </tr>
      <tr>
         <td><b>Rank</b></td>
         <td colspan="3"><?php echo $row["Rank"] ?></td>
      </tr>
      <tr>
         <td colspan="4">
            <h4 style="text-align: center; margin: 0px">PREFERRED LOCATION</h4>
         </td>
      </tr>
      <tr>
         <td><b>Preferred Location 1</b></td>
         <td><?php echo $row["Loc1"] ?></td>
         <td><b>Preferred Location 2</b></td>
         <td><?php echo $row["Loc2"] ?></td>
      </tr>
      <tr>
         <td><b>Preferred Location 3</b></td>
         <td colspan="3"><?php echo $row["Loc3"] ?></td>
      </tr>
   </table>
</div>
<?php
   }
   ?>
<div id="tdprintbtn" style="width: 810px; margin: 0 auto 30px; text-align: center;">
   <input type="button" onclick="javascript: printDiv('printablediv')" value="Print"/>
</div>
</body>
</html>



