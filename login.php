<?php
include("logincheck.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<?php include'header.php'; ?>
<head>
<meta http-equiv="contant-Type" content="text/html.charset=utf-8"/>
<br><br><br><br><br><br><br><br><br><br><title>Login page</title>
</head>
<style>
body { 
	  
	  position:cover;
	  font-family:Cambria;
	  color:white;
	  }
table { border:3px white; width:5px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%; 
	
}

td, th {
    border: 1px white;
    text-align: center;
    padding: 8px;
}
img{width:150px;height:150px;}
</style>
<body background="111.jpg" height="50px" width="50px">
<form action="logincheck.php" style="border 3px solid ccc" method="post">
<div id="formbox">
<h1>login page</h1>
Username:<input type="text" name="username"><br><br>
Password:<input type="text" name="password"><br><br>
<input type="submit" name="submit" value="Login">
</div>
</form>
<a href="signup.php"><button>New User??</button></a>
</body>
</html>
