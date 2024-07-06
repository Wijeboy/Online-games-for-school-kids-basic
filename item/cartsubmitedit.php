<?php
	require 'config.php';
	
	$id = $_POST["itemid"];
	$img = $_POST["img"];
	$iName = $_POST["itemName"];
	$iprice = $_POST["itemPrice"];
	$iDes = $_POST["linkdes"];
	
	
	$sql = "Update 	item 
			set Image = '$img',
			Name = '$iName',
			Price = '$iprice',
			Link = '$iDes'
			where Item_Id = '$id'";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Updated successfully')</script>";
		header("Location:cart2.php");
	}
	else{
		echo "<script>alert('Error in updating')</script>";
	}
	
	mysqli_close($conn);
	
?>