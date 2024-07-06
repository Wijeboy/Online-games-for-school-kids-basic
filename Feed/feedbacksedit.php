
<?php
	require 'config.php';
	
	$FeedId = $_GET['id'];
    $Name =$_GET['name'];
	$Email = $_GET['email'];
	$Des  = $_GET['des'];
	
	
?>

<html>
<head>

<link rel="stylesheet" href="styles [CSS]/styleshf.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	
	
</head>
<title>feedback</title>

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
	
  
            <form action="submitedit.php" method= "POST">
                <h1>Feedback Form</h1>
				
				        <h3>Feedback_id</h3>
                        <input type="text" value= "<?php echo "$FeedId" ?>" name="feedback_id" readonly><br><br>
                        <h3>Name</h3>
                        <input type="text" value= "<?php echo "$Name" ?>"  name="name" class="txt" ><br>
            
                        <h3>E-mail</h3>
                        <input type="text" value= "<?php echo "$Email" ?>"  name="Email" class="txt"><br>
             
                        <h3>Share Your Feedback Here</h3>
                        <textarea class="txtarea" value= "<?php echo "$Des" ?>"  name="des">

                        </textarea><br><br>
                        
                    <input type="submit" value="Update Item">
                        
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