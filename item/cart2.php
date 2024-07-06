<?php
	require 'config.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="styles [CSS]/styleshf.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View Cart Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        header a {
            color: white;
            text-decoration: none;
            margin: 10px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .cart-item, .recommendation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            align-items: center;
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        .recommendation-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .recommendation {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .recommendation img {
            width: 150px;
            margin-bottom: 10px;
        }
        .recommendation-button {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        button {
            padding: 0.5rem 1rem;
            margin-top: 5px;
            cursor: pointer;
        }
        .pay-now-button {
            background-color: green;
            color: white;
            border: none;
        }
        .remove-button {
            background-color: red;
            color: white;
            border: none;
        }
		.add-to-cart-button {
			background-color:#207DDF ;
			color: white; 
		}
		.pay-all-button{
			background-color: green;
            color: white;
            border: none;
		}
    </style>
</head>

<body>
	<ul class="navbar">

	<li><a href="../reg/Home.html">Home</a></li>
<li><a href="../admin/Games.html">Games</a></li>
<li><a href="../aboutUs/AboutUs.html">About us</a></li>
<li><a href="../Support/support1.html">Support</a></li>
<li><a href="../FA/FAQ.html">FAQ</a></li>
<li><a href="../feed/addfeeds.html">Feedback</a></li>
	<li id="logo"><a href="#"> <img src="resources(src)/images/profile.png" width="35px" height="35px"></a></li>
		
	</ul>
		
   	<div class="productData">	
		<table width="100%" border="1">
		
		<tr>
			<th>Item ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Link</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			$sql = "select * from item";
			$result = $conn->query($sql);
			
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<tr>
								<td>".$row["Item_Id"]."</td>
								<td>".$row["Image"]."</td>
								<td>".$row["Name"]."</td>
								<td>".$row["Price"]."</td>
								<td>".$row["Link"]."</td>
								<td><a href='cartedit.php?id=$row[Item_Id]&img=$row[Image]&name=$row[Name]&prc=$row[Price]&link=$row[Link]'>Edit</a></td>
								<td><a href='deletecart.php?id=$row[Item_Id]'>Delete</a></td>
							</tr>";
				}
			}
			else{
				echo "Empty rows";
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
