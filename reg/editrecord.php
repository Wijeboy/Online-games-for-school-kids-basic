<?php

require 'config.php';

$id = $_GET['id'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$DOB = $_GET['dob'];
$Country = $_GET['country'];
$Gender = $_GET['gender'];
$Email = $_GET['mail'];
$MobileNumber = $_GET['pnum'];
$Password = $_GET['pass'];
$Con_password = $_GET['cpass'];

?>


<html>
<head>

<link rel="stylesheet" href="styles [CSS]/stylesRA.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
	
<title>Edit Register</title>

<body>
<ul class="navbar">

<li><a href="Home.html">Home</a></li>
<li><a href="#">Games</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Feedback</a></li>
<li id="logo"><a href="#"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>	
	<br><p class="test1"><strong><a href="RegisterAdmin.html">Admin</a>
</ul>
	
	

	<div class="container1">
        <div class="header">
		
            
        </div>
		
		<div>
	
	    <form action="submitUpdateItems.php" method="POST">
            <div class="form1">
			User ID:
		<input type="text" value="<?php echo "$id"?>" name="itemCode" readonly>
			<br>
			<br>
			
                <label for="First name">First name</label>
                <input type="text" id="fname" value="<?php echo "$fname"?>" name="firname"  required>
            </div>
			
			 <div class="form1">
			
                <label for="Last name">Last name</label>
                <input type="text" id="lname" value="<?php echo "$lname"?>" name="lasname" 
				 required>
            </div>
			
			
			 <div class="dob">
			
                <label for="date">DOB</label>
                <input type="date" id="date" value="<?php echo "$DOB"?>" name="dateofb" required>
            </div>
			
			
			 <div class="form-group">
    		<label for="country" value="<?php echo "$Country"?>" name="country">Country</label>
    				<select id="country" name="country" required>
        			<option value="usa">United States</option>
        			<option value="canada">Canada</option>
        			<option value="uk">United Kingdom</option>
        			<option value="australia">Australia</option>
        			<option value="other">Other</option>
    				</select>
			</div>
			
			
			<br>
			 <div class="form1">
			
                <label for="gender">Gender</label>
				 
				 <input type="radio" value="<?php echo "$Gender"?>" name="gen" value="male"> Male
				&nbsp; &nbsp; 
				 
				 <input type="radio" name="gen" value="female">Female
            </div>
			
            <div class="form1">
			
                <label for="email">Email</label>
                <input type="email" id="email" value="<?php echo "$Email"?>" name="email" placeholder="PixelPulse@Gaming.com" required>
            </div>
			
			
			<div class="pno">
			
                <label for="pnumber">Mobile Number</label>
                <input type="tel" id="phone" value="<?php echo "$MobileNumber"?>" name="phone"  required pattern="[0-9]+" required>
            </div>
			
			
            <div class="form1">
			
                <label for="password">Password</label>
                <input type="password" id="password" value="<?php echo "$Password"?>" name="password" required>
            </div>
			
            <div class="form1">
			
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" value="<?php echo "$Con_password"?>" name="confirm_password" required>
            </div>
		
			
			
            <button type="submit" class="lbtnf">Update</button>
			
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