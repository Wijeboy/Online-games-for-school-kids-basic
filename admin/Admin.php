<?php

require 'config.php';

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

<li><a href="../reg/Home.html">Home</a></li>
<li><a href="Games.html">Games</a></li>
<li><a href="../aboutUs/AboutUs.html">About us</a></li>
<li><a href="../Support/support1.html">Support</a></li>
<li><a href="../FA/FAQ.html">FAQ</a></li>
<li><a href="../feed/addfeeds.html">Feedback</a></li>
<li><a href="addgames.html">Add Game</a></li>
<li id="logo"><a href="../IWT Project/Register.html"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>	
	
</ul>
	
	
	<header>
        <img class="pixyl" src="resources(src)/images/pixyl.png">
    </header>
	
	
	
	<button type="submit" class="lbtn"> <a href="RegisterAdmin.php"> Register Admin </a></button>
	
	<button type="submit" class="lbtn"> <a href="../FA/faqphp.php"> FAQ Admin </a></button>
	
	<button type="submit" class="lbtn"> <a href="../item/cart2.php"> Cart Admin </a></button>
	
	<button type="submit" class="lbtn"> <a href="../feed/addfeeds.php"> Feedback Admin </a></button>
	
	<button type="submit" class="lbtn"> <a href="../Support/support1.php"> Support Admin </a></button>
	
	

	
	<div class = "GameData">
		<table border ="1" width ="100%">
		<tr>
			<th>Game ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Description</th>
			<th>Developer</th>
			<th>Publisher</th>
			<th>System Requirements</th>
			<th>Edit Game</th>
			<th>Delete Game</th>
			
		</tr>
		
		<?php
			$sql = "select * from games";
			
			$result = $conn->query($sql);
			
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					echo"<tr>
					<td>".$row["Game_Id"]."</td>
					<td>".$row["G_Image"]."</td>
					<td>".$row["Name"]."</td>
					<td>".$row["G_Description"]."</td>
					<td>".$row["Developer"]."</td>
					<td>".$row["Publisher"]."</td>
					<td>".$row["System_Req"]."</td>
					<td><a href='editgame.php?id=$row[Game_Id]&image=$row[G_Image]&name=$row[Name]&des=$row[G_Description]&dev=$row[Developer]&pub=$row[Publisher]&sreq=$row[System_Req]'>Edit</a></td>
					<td><a href='deleteGames.php?id=$row[Game_Id]'>Delete</a></td>
					
					</tr>";
				}
			}
			else{
				echo "Table is empty";
			}
		
		
		?>
		</table>
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