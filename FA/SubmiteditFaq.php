<?php
	require 'config.php';
	
	$id = $_POST["faqid"];
	$iName = $_POST["Name"];
	$iemail = $_POST["Email"];
	$iDes = $_POST["qdes"];
	
	
	
	$sql = "Update faq 
			set Name = '$iName',
			Email = '$iemail',
			Q_desk = '$iDes'
			where FAQ_id= '$id'";
				
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