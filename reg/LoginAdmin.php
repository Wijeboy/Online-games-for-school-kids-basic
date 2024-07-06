<?php

require 'config.php';

?>

<html>
<head>

<link rel="stylesheet" href="styles [CSS]/stylesL.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	
	
</head>
<title>Login Admin</title>

<body>
<ul class="navbar">

<li><a href="Home.html">Home</a></li>
<li><a href="#">Games</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Feedback</a></li>
<li id="logo"><a href="#"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>
	
	<br><p class="test1"><strong><a href="#">Admin</a>
	

</ul>
	
	<h1 class="al">Login Admin Page </h1>
	
	<header>
        <img class="pixyl" src="resources(src)/images/pixyl.png">
    </header>
	
	
	
	
	
	
	
	<table border="1" width="100%">
	<tr><th>Login ID</th>
		<th>Email</th>
		<th>Password</th>
		<th>Edit Item</th>
		<th>Delete Item</th>
	</tr>
	
	<?php
	
	
	$sql = "select * from login";
	
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			
			echo "<tr>
						<td>".$row["Login_id"]."</td>
						<td>".$row["Email"]."</td>
						<td>".$row["Password"]."</td>
						
<td><a href='editrecordlogin.php?lid=$row[Login_id]&mail=$row[Email]&pass=$row[Password]'>Edit</a></td>
						<td><a href='deleteItemslogin.php?lid=$row[Login_id]'>Delete</a></td>
			
				</tr>";
		}
	}
	else{
		echo "Table is empty";
		
	}
	
	?>
	
	</table>
	
	
	<button class="lbtn2"><a href="RegisterAdmin.php">Revert back to main Register Admin</a></button>
	
	
	
	
	
	
	
	
	
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