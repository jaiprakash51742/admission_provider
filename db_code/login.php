<?php
    include_once('config.php');

    if (isset($_POST['username'])) 
    {
      $username=$_POST['username'];
      $password=$_POST['password'];
    }

    $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
    $qry=mysqli_query($con,$sql);
    $counts=mysqli_num_rows($qry);
    if ($counts>0) 
    {
     $row=mysqli_fetch_array($qry); 
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
?>
    <script type="text/javascript">
      window.location.href="../admin/displayalldata.php";
    </script>
<?php
}
else
{
?>
    <script type="text/javascript">
        alert('user name and password is wrong');
      window.location.href="index.php";
    </script>
<?php
}
?>

