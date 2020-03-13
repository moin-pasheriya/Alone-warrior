
<?php
 include("config.php");
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password sent from form
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$selectsql="SELECT id, username FROM registration WHERE username='$username' and password='$password'";
$result=mysqli_query($db,$selectsql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$userid = $row['id'];
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;
$_SESSION['userid']=$userid;
header("location:home2.php");
}
}
?>