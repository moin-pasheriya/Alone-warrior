<?php 
if(isset($_POST['submit'])){
    $datefrom = $_POST['datefrom'];
    $dateto = $_POST['dateto'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $adress = $_POST['adress'];
    $postcode = $_POST['postcode'];
    $time_period = $_POST['time_period'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $connection = mysqli_connect('localhost', 'root', '','fitness customers');
    if(!$connection){
    die("Database connection failed");
    }
    $query = "INSERT INTO order_form(datefrom,dateto,firstname,lastname,contact,adress,postcode,time_period,email,feedback)";
    $query .= "VALUES ('$datefrom', '$dateto','$firstname', '$lastname', '$contact', '$adress', '$postcode', '$time_period', '$email', '$feedback')";
    $result = mysqli_query($connection, $query);
    if(!$result){
    die('query is faild' . mysqli_connect_error());
    }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include'header.php'; ?>
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<title>SPARTAN GYM</title>  

<script>
function validate()                                    
{ 
	var datefrom = document.forms["form"]["datefrom"];
	var dateto = document.forms["form"]["dateto"];
    var firstname = document.forms["form"]["firstname"];
    var lastname = document.forms["form"]["lastname"];
    var contact= document.forms["form"]["contact"];
	var adress = document.forms["form"]["adress"];
	var postcode = document.forms["form"]["postcode"];
    var time_period = document.forms["form"]["time_period"];	
    var email = document.forms["form"]["email"];	
	var feedback = document.forms["form"]["feedback"];
   
   
    if (datefrom.value == "")                                  
    { 
        window.alert("Please enter your date."); 
        datefrom.focus(); 
        return false; 
    } 
	
	 if (dateto.value == "")                                  
    { 
        window.alert("Please enter your date."); 
        dateto.focus(); 
        return false; 
    } 

   
   
    if (firstname.value == "")                                  
    { 
        window.alert("Please enter your firstname."); 
        firstname.focus(); 
        return false; 
    } 
   
    if (lastname.value == "")                               
    { 
        window.alert("Please enter your lastname"); 
        lastname.focus(); 
        return false; 
    }  
	
    if (contact.value == "")                               
    { 
        window.alert("Please enter your contact"); 
        contact.focus(); 
        return false; 
    } 
   
    if (adress.value == "")                               
    { 
        window.alert("Please enter your adress"); 
        adress.focus(); 
        return false; 
    }  
	 
   
    if (postcode.value == "")                               
    { 
        window.alert("Please enter your postcode"); 
        postcode.focus(); 
        return false; 
    }
	
	if (time_period.value == "")                           
    { 
        window.alert("Please select time_period."); 
        time_period.focus(); 
        return false; 
    } 
	
	if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
	if (feedback.value == "")                           
    { 
        window.alert("Please enter your feedback."); 
        feedback.focus(); 
        return false;
    } 
   
    return true; 
}
function myfunction() {
	alert("hello, your order (form) is added");
}
   </script> 
 

     </head>  
<body style="background-image:url('img.jpg')">
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
    text-align:left;
  
}
img{width:150px;height:150px;}

    </style>
   
    <table>
<center> <h1> ORDER FORM  </h1>  </center>  
<center>
<form  name="form"  onsubmit="return validate()" action="movierent.php" method="post">
 
<input type="date" name="datefrom" style="width: 250px; padding: 10px"><br><br> 
<input type="date" name="dateto" style="width: 250px; padding: 10px"><br><br>
<input type="text"placeholder="Firstname" name="firstname" style="width: 250px; padding: 10px"><br><br>
<input type="text"placeholder="Lastname" name="lastname" style="width: 250px; padding: 10px"><br><br>
<input type="number"placeholder="contact" name="contact" style="width: 250px; padding: 10px"><br><br>
<input type="text"placeholder="Adress" name="adress" style="width: 250px; padding: 10px"><br><br>
<input type="text"placeholder="Postcode" name="postcode" style="width: 250px; padding: 10px"><br><br>
<input type="text" placeholder="Time Period"name="time_period" style="width: 250px; padding: 10px"><br><br>
<input type="e-mail"placeholder="Email"name="email" style="width: 250px; padding: 10px"><br><br>
<input type="feedback"placeholder="Feedback" name="feedback" style="height:80px;width: 250px; padding: 10px"><br><br>

	<center>
    <input type="submit" value="submit" id="button1" name="submit" onclick="myfunction()"  >
    <a href="Home.php"> <button type="button" class="canclebtn" id="button1" > Cancel </button></a> 
    </center> 
</form>  
</center> 
</table>   
</body>       
</html>