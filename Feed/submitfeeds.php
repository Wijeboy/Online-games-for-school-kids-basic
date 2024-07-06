<?php
	
	require 'config.php';
	
	$Name = $_POST["name"];
	$Email = $_POST["Email"];
	$Des = $_POST["des"];
	
	$sql ="insert into feedback(feedback_id,name,Email,feed_desc)values('', '$Name', '$Email', '$Des')"; 
				
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record inserted successfully')</script>";
		header("Location:addfeeds.html");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}
	
	mysqli_close($conn);
	
?>
