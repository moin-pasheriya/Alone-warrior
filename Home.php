<?php
include("logincheck.php");
?>
<html>
<?php include'header.php'; ?>
<head>
<style>
body { 
	  background:url(".0.jpg");
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
    text-align: left;
    padding: 25px;
}
img{width:200px;height:200px;}

@keyframes foo {
	0% { content: url(.0.jpg); }
	25% { content: url(part.jpg); }
	50% { content: url(1.jpg); }
	75% { content: url(2.jpg); }
}
 
.bar {
	animation-name: foo;
	animation-duration: 3s;
	animation-iteration-count: infinite;
	max-height: 500px;
	max-width: 90vw;
}
</style>
<title> SPARTAN GYM</title>
</head>
<body>
