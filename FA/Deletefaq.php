<?php
	require 'config.php';
	
		$FAQId = $_GET['id'];
	
	
	$sql = "delete from faq where 	FAQ_id = '$FAQId'";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Updated successfully')</script>";
		header("Location:faqphp.php");
	}
	else{
		echo "<script>alert('Error in updating')</script>";
	}
	
	mysqli_close($conn);
	
	
?>