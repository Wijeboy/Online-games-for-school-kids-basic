<?php

require 'config.php';

$lid = $_POST["lid"];
$email = $_POST["mail"];
$password = $_POST["password"];

$sql = "Update login 
	set Email = '$email',Password ='$password'
	where Login_id  = '$lid'";

				
				
				
if(mysqli_query($conn,$sql)){
	echo "Record updated successfully";
	
	header("Location:LoginAdmin.php");
	
}

else{
	echo "Cannot update the record";
}

mysqli_close($conn);
				
				
				

?>


