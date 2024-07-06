<?php

require 'config.php';

$gameID = $_GET['id'];
$gameimage = $_GET['image'];
$gameName = $_GET['name'];
$des = $_GET['des'];
$developer = $_GET['dev'];
$publisher = $_GET['pub'];
$systemReq = $_GET['sreq'];


?>

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="styles [CSS]/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<title>Admin</title>

<body>
<ul class="navbar">

<li><a href="#">Home</a></li>
<li><a href="#">Games</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Feedback</a></li>
<li><a href="addgames.html">Add Game</a></li>
<li id="logo"><a href="../IWT Project/Register.html"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>		
	<br><p class="test1"><strong><a href="../IWT Project/Login.html">Login</a> / <a href="../IWT Project/Register.html">Register</a></strong></p>
</ul>
	
	
	<header>
        <img class="pixyl" src="resources(src)/images/pixyl.png">
    </header>
	
<br>
	<div class="wrap">
		
		<form action ="submitUpdateGames.php" method ="POST">
			
			<label>Game ID</label>
			<div class="inputfld">
			<input type= "text" value = "<?php echo "$gameID"?>" name ="gamecode" readonly><br><br>
			</div>
			
			<label>Game Image</label>
			<div class="inputfld">
			<input type= "text" value = "<?php echo "$gameimage"?>" name ="gameimage"><br><br>
			</div>
			
			<label>Game name</label>
			<div class="inputfld">
			<input type= "text" value = "<?php echo "$gameName"?>" name ="gamename"><br><br>
			</div>
			
			<label>Description</label>
			<div class="inputfld">
			<input type= "text" value = "<?php echo "$des"?>" name ="gameDes"><br><br>
			</div>
			
			<label>Developer</label>
			<div class="inputfld">
			<input type= "text" value = "<?php echo "$developer"?>" name ="gamedevelop"><br><br>
			</div>
			
			<label>Publisher</label>
			<div class="inputfld">
			<input type= "text" value = "<?php echo "$publisher"?>" name ="gamepublish"><br><br>
			</div>
		
			<label>System Requirements</label>
			<div class="inputfld">
			<input type= "text" value = "<?php echo "$systemReq"?>" name ="systemReq"><br><br>
			</div>
	
			<div class="btn">
			<input type= "submit" name ="Update Game">
			</div>
				
			</form>
				
		</div>
			
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>contact</h4>
  	 			<ul>
 				  <li><a href="#">pixelpulse@gaming.com&nbsp;</a></li>
  	 				<li><a href="#">Tel : 0112-234-55&nbsp;</a></li>
  	 				<li><a href="#">Newyork, USA</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>License &amp; Terms&nbsp;</h4>
  	 			<ul>
 				  <li><a href="#">Privacy policy</a></li>
  	 				<li><a href="#">Terms of use</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<ul>
 				  <li><a href="#">about us</a></li>
  	 				<li><a href="#">contact us</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://lk.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
	 <p class="copy1">
					<br><br>&copy; 2023 PixelPulse. All Rights Reserved.</p>
  </footer>
	



</body>
</html>