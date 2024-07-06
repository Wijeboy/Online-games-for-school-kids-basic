<?php

require 'config.php';

	$id = $_GET['lid']; //copy from editrecord.php
	
	$sql = "delete from login where Login_id = '$id'";
	
	
	if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully";
	
	header("Location:LoginAdmin.php");
	
}

else{
	echo "<script>alert('Cannot delete the record')</script>";
}

mysqli_close($conn);

?>