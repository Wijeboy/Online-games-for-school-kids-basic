<?php

require 'config.php';

$Payid = $_GET['pid'];
$Chname = $_GET['cname'];
$Expdate = $_GET['expd'];
$CVVnum = $_GET['cvv'];
$Cnumb = $_GET['cnum'];

?>


<html>
<head>

<link rel="stylesheet" href="styles [CSS]/stylesRA.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
	
<title>Edit Payment Details</title>

<body>
<ul class="navbar">

<li><a href="Home.html">Home</a></li>
<li><a href="#">Games</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Feedback</a></li>
<li id="logo"><a href="#"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>	
	<br><p class="test1"><strong><a href="PaymentAdmin.html">Admin</a>
</ul>
	
	

	<div class="container1">
        <div class="header">
		
            
        </div>
		
		<div>
	
	    <form action="submitUpdateItemspayment.php" method="POST">
            <div class="form1">
			Payment Code:
		<input type="text" value="<?php echo "$Payid"?>" name="pcode" readonly>
		
            </div>
            <div class="form-group">
                <label for="cardNumber">Card Number</label>
				
                <input type="text" id="cardNumber" value="<?php echo "$Cnumb"?>" name="cnumber" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" value="<?php echo "$CVVnum"?>" name="cvv" required>
				
            </div>
            <div class="form-group">
                <label for="cardholderName">Cardholder Name</label>
                <input type="text" id="cardholderName" value="<?php echo "$Chname"?>" name="cardholderName" required>
				
            </div>
            <div class="form-group">
                <label for="expireDate">Expiration Date</label>
				
                <input type="date" id="expireDate" value="<?php echo "$Expdate"?>" name="expireDate" required>
            </div>
            <button type="submit" class="lbtn1">Update</button>
        </form>
		
    </div>
	
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