<?php
	require 'config.php';
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

		
	<div class="productData">	
		<table width="100%" border="1">
		
		<tr>
		    <th> Feedback_ID</th>
			<th>Name</th>
			<th>E-Mail</th>
			<th>Feedback_description</th>
			<th>Edit</th>
			<th>Delete</th>
			
		</tr>
		
		<?php
			$sql = "select * from feedback";
			$result = $conn->query($sql);
			
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<tr>
					            <td>".$row["feedback_id"]."</td>
								<td>".$row["name"]."</td>
								<td>".$row["Email"]."</td>
								<td>".$row["feed_desc"]."</td>
								<td><a href='feedbacksedit.php?id=$row[feedback_id]&name=$row[name]&email=$row[Email]&des=$row[feed_desc]']>Edit</a></td>
								<td><a href='deletefeed.php?id=$row[feedback_id]'>Delete</a></td>
							</tr>";
				}
			}
			else{
				echo "Empty rows";
			}
		
		?>
		</table>
		







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