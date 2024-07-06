<?php
	require 'config.php';
	
		
	$idid = $_GET['id'];
	
	$sql = "delete from support where sup_id = '$idid'";
				
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