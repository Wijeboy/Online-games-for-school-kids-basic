<?php

require 'config.php';

$lid = $_GET['lid'];
$email = $_GET['mail'];
$password = $_GET['pass'];

?>



<html>
<head>

<link rel="stylesheet" href="styles [CSS]/stylesL.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	
	
</head>
<title>Login</title>

<body>
<ul class="navbar">

<li><a href="Home.html">Home</a></li>
<li><a href="#">Games</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Feedback</a></li>
<li id="logo"><a href="#"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>
	
	<br><p class="test1"><strong><a href="LoginAdmin.html">Admin</a>
	

</ul>
	
	
	<header>
        <img class="pixyl" src="resources(src)/images/pixyl.png">
    </header>
	
	
	
	
	
	
	
	
	
  <div class="container1">
        <div class="header">
			<h2>Welcome</h2>
            <h4>Login to Your Account</h4>
        </div>
        <form action="submitUpdateItemslogin.php" method="POST">
            <div class="forml">
			login ID:
		<input type="text" value="<?php echo "$lid"?>" name="lid" readonly>
			<br>
			<br>
                <label for="mail">E-mail</label>
                <input type="text" id="mail" value="<?php echo "$email"?>" name="mail" required>
				
            </div>
			
            <div class="forml">
                <label for="password">Password</label>
                <input type="password" id="password" value="<?php echo "$password"?>" name="password" required>
            </div>
            <button type="submit" class="lbtn">Update</button>
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