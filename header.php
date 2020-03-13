  <?php
// Turn off all error reporting
error_reporting(0);
?> 
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 <title>SPARTAN GYM</title>
 

     
    <link rel="stylesheet" href="header-info.css">
	<link rel="stylesheet" href="header-outline.css">
    </head>
<header class="header-distributed">
      
       
    <table>
<th>
<img src="GYM.jpg" alt="LOGO" width="150" height="150">
<style>
.springy-text {
  color: white;
  animation-name: springy-text;
  animation-duration: 1s;
  animation-timing-function: ease-in;
  animation-delay: 0s;
  animation-iteration-count: infinite;
  animation-direction: alternate-reverse;
  animation-play-state: running;
  animation-fill-mode: backwards;
}
@keyframes springy-text {
  0%   {
    letter-spacing: 1.2em;
    color: white;
  }
  100%   {
    letter-spacing: 0.1em;
    color: white;
  }
}
</style>

<!-- Script to pause/start the animation -->
<script>
  function togglePlayState(newState) {
    document.getElementById("springy").style.animationPlayState=newState;
  }
</script>

<h1 class="springy-text" id="springy">SPARTAN GYM</h1>
</th>
<?php
session_start();

if(isset($_SESSION['login_user'])){
	echo "<p style='font-size:20px;font-weight: bold;color:black;'>Welcome...";
	echo $_SESSION['login_user'];
}
?>
</table>
<table>
<!------------------------------------------------------------------------->
      <?php if(isset($_SESSION['login_user'])) { ?> 
    <a  href="logout.php"><button>LOGOUT</button></a>
    <?php }else { ?>
      <a class="link" href="login.php" style="text-decoration:none"><button>LOGIN</button></a>
      <?php } ?>

      <?php if(isset($_SESSION['login_user'])) { ?> <?php }else { ?>
      <a class="link" href="signup.php"><button>Sign up</button></a>
      <?php } ?>
    <!--------------------------------------------------------------------->
    <a href="home2.php"><button>Home</button></a>

  

	


<center>

</form>

</div>

</body>
</center>
</table>
</header>
</html>