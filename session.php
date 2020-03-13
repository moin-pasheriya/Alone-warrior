<?php
 include('config.php');
 session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($db,"select username from registration where username='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
if(!isset($loggedin_session))
{
header("Location: login.php");
}
?>