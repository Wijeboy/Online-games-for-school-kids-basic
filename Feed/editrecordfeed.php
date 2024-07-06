<?php
	require 'config.php';
	
	$FeedId = $_POST["itemCode"];
	$Name = $_POST["itemName"];
	$Email = $_POST["itemPrice"];
	$Des = $_POST["itemQuantity"];

	
	
	$sql = "Update item 
			set item_name = '$iName',
			item_price = '$iprice',
			item_qty = '$iQty',
			item_description = '$iDes'
			where item_id = '$id'";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Updated successfully')</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert('Error in updating')</script>";
	}
	
	mysqli_close($conn);
	
?>