<?php


	require 'config.php';
	
	$supId = $_POST["support_id"];
	$Name = $_POST["name"];
	$Email = $_POST["Email"];
	$Des = $_POST["des"];

	
	
	$sql = "Update support 
			set 
			Name = '$Name',
			Email = '$Email ',
			sup_desc = '$Des'
			where  sup_id  = '$supId'";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Updated successfully')</script>";
		header("Location:support1.php");
	}
	else{
		echo "<script>alert('Error in updating')</script>";
	}
	
	mysqli_close($conn);
	
?>