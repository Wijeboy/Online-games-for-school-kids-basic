<?php

require 'config.php';

?>


<html>
<head>

<link rel="stylesheet" href="styles [CSS]/stylesRA.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
	
<title>Register Admin</title>

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
	
	
	<h1 class="al">Register Admin Page </h1>
	
	
	
	
	<header>
        <img class="pixyl" src="resources(src)/images/pixyl.png">
    </header>
	
	
	
	<table border="1" width="100%">
	<tr><th>Reg ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>DOB</th>
		<th>Country</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Pnumber</th>
		<th>Password</th>
		<th>C_password</th>
		<th>Edit Item</th>
		<th>Delete Item</th>
	</tr>
	
	<?php
	
	
	$sql = "select * from register_user";
	
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			
			echo "<tr>
						<td>".$row["Reg_ID"]."</td>
						<td>".$row["FirstName"]."</td>
						<td>".$row["LastName"]."</td>
						<td>".$row["DOB"]."</td>
						<td>".$row["Country"]."</td>
						<td>".$row["Gender"]."</td>
						<td>".$row["Email"]."</td>
						<td>".$row["Pnumber"]."</td>
						<td>".$row["Password"]."</td>
						<td>".$row["C_password"]."</td>
						
<td><a href='editrecord.php?id=$row[Reg_ID]&fname=$row[FirstName]&lname=$row[LastName]&dob=$row[DOB]&country=$row[Country]&gender=$row[Gender]&mail=$row[Email]&pnum=$row[Pnumber]&pass=$row[Password]&cpass=$row[C_password]'>Edit</a></td>
						<td><a href='deleteItems.php?id=$row[Reg_ID]'>Delete</a></td>
			
				</tr>";
		}
	}
	else{
		echo "Table is empty";
		
	}
	
	
	
	
	?>
	
	</table>
	
	
	
	<button class="lbtn"><a href="loginAdmin.php">Login Admin</a></button>
	
	<button class="lbtn"><a href="PaymentAdmin.php">Payment Admin</a></button>
	
	
	
	
	
	
	
	
	
	
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