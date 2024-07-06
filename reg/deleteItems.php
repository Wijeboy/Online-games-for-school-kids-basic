<?php

require 'config.php';

	$id = $_GET['id']; //copy from editrecord.php
	
	$sql = "delete from register_user where Reg_ID = '$id'";
	
	
	if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully";
	
	header("Location:RegisterAdmin.php");
	
}

else{
	echo "<script>alert('Cannot delete the record')</script>";
}

mysqli_close($conn);

?>