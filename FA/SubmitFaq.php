<?php
	
	require 'config.php';
	
	$iName = $_POST["Name"];
	$iemail = $_POST["Email"];
	$iDes = $_POST["qdes"];
	
	
	$sql ="insert into faq(FAQ_id,Name,Email,Q_desk) 
				values('','$iName','$iemail','$iDes')";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record inserted successfully')</script>";
		header("Location:FAQ.html");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}
	
	mysqli_close($conn);
	
?>