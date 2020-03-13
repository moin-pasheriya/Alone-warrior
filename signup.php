<?php
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $contact = $_POST['contact'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $conform_password = $_POST['conform_password'];
    $connection = mysqli_connect('localhost', 'root', '','fitness customers');
    if(!$connection){
    die("Database connection failed");
    }
    $query = "INSERT INTO registration(username,contact,email,password,conform_password)";
    $query .= "VALUES ('$username', '$contact', '$email', '$password','$conform_password')";
    $result = mysqli_query($connection, $query);
    if(!$result){
    die('query is failed' . mysqli_connect_error());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include'header.php'; ?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script>
function validate()                                    
{ 
	var username = document.forms["form"]["username"];
    var contact= document.forms["form"]["contact"];	
    var email = document.forms["form"]["email"];	
	var password = document.forms["form"]["password"];
	var conform_password = document.forms["form"]["conform_password"];
   
   
    if (username.value == "")                                  
    { 
        window.alert("Please enter your username."); 
        username.focus(); 
        return false; 
    } 
	
	
    if (contact.value == "")                               
    { 
        window.alert("Please enter your contact"); 
        contact.focus(); 
        return false; 
    } 
   
     
	
	if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
	if (password.value == "")                           
    { 
        window.alert("Please enter your password."); 
        password.focus(); 
        return false;
    } 
	
	if (conform_password.value == "")                           
    { 
        window.alert("Please enter your conform_password."); 
        conform_password.focus(); 
        return false;
    } 
   
    return true; 
}
function myfunction() {
	alert("hello, your data is added");
}
   </script> 
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
<body background="img.jpg" height="50px" width="50px">
<center>
<table>
<form  name="form"  onsubmit="return validate()" action="signup.php" method="post">
 <div class="container">
  <h1>Registration Form</h1></table>
<table >
  <td class="container"> 
           <input id="td"type="text" placeholder="Username" name="username" class="form-control"/><br><br>
           <input id="td"type="text" placeholder="Contact" name="contact" class="form-control"/><br><br> 
           <input id="td"type="text" placeholder="Email" name="email" class="form-control"/><br><br> 
           <input id="td" type="password" placeholder="Password" name="password" class="form-control"/><br><br> 
           <input id="td" type="password" placeholder="Conform Password" name="conform_password" class="form-control"/><br><br>
 		    
</td>
<table>
    <div class="clearfix">
      <button type="reset" class="resetbutton"> RESET </button>
      <button type="submit" value="submit" name="submit" class="signupbutton"> Signup </button>
    </div>
  </div>
 </table>
</form>
</center>
</body>
</html>