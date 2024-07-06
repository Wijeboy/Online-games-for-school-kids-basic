<?php
	
	require 'config.php';
	
	
	$img = $_POST["img"];
	$Name = $_POST["itemName"];
	$prc = $_POST["itemPrice"];
	$Des = $_POST["linkdes"];
	
	$sql ="insert into item(Item_Id,Image,Name,	Price,Link) 
				values('','$img','$Name','$prc','$Des')";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record inserted successfully')</script>";
		header("Location:additems.html");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}
	
	mysqli_close($conn);
	
?>

img