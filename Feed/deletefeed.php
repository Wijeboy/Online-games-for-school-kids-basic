<?php
	require 'config.php';
	
		
	$feedid = $_GET['id'];
	
	$sql = "delete from feedback where feedback_id = '$feedid'";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Updated successfully')</script>";
		header("Location:addfeeds.php");
	}
	else{
		echo "<script>alert('Error in updating')</script>";
	}
	
	mysqli_close($conn);
	
	
?>