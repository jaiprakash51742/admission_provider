
<?php
   include_once('config.php');
  if(isset($_POST['btn_login'])){
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $sanitized_userid = mysqli_real_escape_string($con,$username);
  $sanitized_pass = mysqli_real_escape_string($con,$pass);
  $selq=mysqli_query($con,"SELECT * FROM `login` WHERE username='$sanitized_userid' and password='$sanitized_pass' and `status`='1'");
  $rest=mysqli_fetch_assoc($selq);
  $getUserId=$rest['username'];
  $getPass=$rest['password'];
  if($getUserId==$sanitized_userid & $getPass==$sanitized_pass){
    // echo "<script>alert('You have been logged In successfuly!');
    //   window.location='dashboard.php';
    // </script>";
     $_SESSION['is_loggedIn'] = true;
    $_SESSION['id']=$rest['id'];
    $_SESSION['username']=$rest['username'];
    header("Location:displayalldata.php");
   
  }else{ ?>
   echo "<script type="text/javascript">
 alert('user name and password is wrong');
window.location.href='index.php';
</script>";
 <?php }
}
   
   
   
//   if (isset($_POST['username'])) {
//   	$username=$_POST['username'];
//   	$password=$_POST['password'];
//   }
   
//     $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
//   $qry=mysqli_query($con,$sql);
//   $counts=mysqli_num_rows($qry);
//   if ($counts>0) {
//   	$row=mysqli_fetch_array($qry);
//   	@session_start();
//   	 $_SESSION['id']=$row['id'];
//   	 $_SESSION['username']=$row['username'];
//       ?>
// <script type="text/javascript">
//   //window.location.href="displayalldata.php";
// </script>
// <?php
//   }
//   else{
//   	?>
// <script type="text/javascript">
//   alert('user name and password is wrong');
//  window.location.href="index.php";
// </script>
// <?php
//   }
   ?>

