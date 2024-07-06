<?php

require 'config.php';

	$pid = $_GET['pid']; //copy from editrecord.php
	
	$sql = "delete from payment where Payment_ID = '$pid'";
	
	
	if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully";
	
	header("Location:PaymentAdmin.php");
	
}

else{
	echo "<script>alert('Cannot delete the record')</script>";
}

mysqli_close($conn);

?>