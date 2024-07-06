<?php

require 'config.php';

$itemId = $_GET['id'];
$img = $_GET['img'];
$itemName = $_GET['name'];
$price = $_GET['prc'];
$link = $_GET['link'];

?>

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="styles [CSS]/styleshf.css">
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
	<li id="logo"><a href="#"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>
		<br><p class="test1"><strong><a href="#">Login</a> / <a href="#">Register</a></strong></p>
	</ul>
		
	
	<header>
        
    </header>
	
<br>
			
	<form action="cartsubmitedit.php" method= "POST">
	Item ID:
	<input type="text" value="<?php echo "$itemId" ?>" name="itemid" readonly><br><br>
	Image:
	<textarea  value="<?php echo "$img" ?>" name="img"></textarea><br><br>
		
	Item Name:
	<input type="text" value="<?php echo "$itemName" ?>" name="itemName"><br><br>	
	
	Item Price:
	<input type="text" value="<?php echo "$price" ?>" name="itemPrice"><br><br>
	
	
	Link:
	<textarea value="<?php echo "$link" ?>" name = "linkdes"></textarea><br><br>
	
	<input type="submit" value="submit">
	
	

</form>
			
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