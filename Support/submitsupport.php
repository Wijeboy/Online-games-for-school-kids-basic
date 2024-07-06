<?php
	
	require 'config.php';
	
	$Name = $_POST["name"];
	$Email = $_POST["email"];
	$Des = $_POST["desc"];
	
	$sql ="insert into support(sup_id,name,email,sup_desc)values('', '$Name', '$Email', '$Des')"; 
				
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record inserted successfully')</script>";
		header("Location:support1.html");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}
	
	mysqli_close($conn);
	
?>
