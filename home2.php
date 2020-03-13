 <?php
 include'session.php';
 ?>
<html>
<?php
 include'header.php';?>

<head>
<title>Spartan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
</style>
</head>
<h1 style="color:white;">Welcome <?php echo $loggedin_session; ?></h1>
<body style="background-image:url('.0.jpg')";  >

<h2 class="w3-center">SPARTAN GYM</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="one more.jpg" style="width:100%">
  <img class="mySlides" src="3.jpg" style="width:100%">
  <img class="mySlides" src="5.jpg" style="width:100%">
  <img class="mySlides" src="7.jpg" style="width:70%">
    <img class="mySlides" src="11.jpg" style="width:70%">
	<img class="mySlides" src="12.jpg" style="width:70%">
	<img class="mySlides" src="13.jpg" style="width:70%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<table>
<tr><img src="9.jpg" style="width:20%">
<th>Weight loose</th><br>
<br><th> Loose 10kg weight in just 15 days</th>
</tr>
</table>
<table>
<tr><img src="11.jpg" style="width:20%">
<th>Cardio</th>
<td>Loose your belly fat in 30 days</th>
</tr>
</table>
<table>
<tr><img src="12.jpg" style="width:20%">
<th>Yoga</th>
<td>Keeps you healthy and fit</th>
</tr>
</table>
<table>
<tr><img src="13.jpg" style="width:20%">
<th>Aerobatics</th>
<td>Keeps you healthy and fit</th>
</tr>
</table>
</body>
</html>