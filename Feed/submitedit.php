<?php
	require 'config.php';
	
	$FeedId = $_POST["feedback_id"];
	$Name = $_POST["name"];
	$Email = $_POST["Email"];
	$Des = $_POST["des"];

	
	
	$sql = "Update feedback 
			set 
			Name = '$Name',
			Email = '$Email ',
			feed_desc = '$Des'
			where feedback_id  = '$FeedId'";
				
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