<?php

require 'config.php';

$id = $_POST["itemCode"];
$fname = $_POST["firname"];
$lname = $_POST["lasname"];
$DOB = $_POST["dateofb"];
$Country = $_POST["country"];
$Gender = $_POST["gen"];
$Email = $_POST["email"];
$MobileNumber = $_POST["phone"];
$Password = $_POST["password"];
$Con_password = $_POST["confirm_password"];

$sql = "Update register_user 
	set FirstName = '$fname',LastName ='$lname',DOB ='$DOB',Country = '$Country',Gender = '$Gender',Email = '$Email',Pnumber = '$MobileNumber',Password = '$Password',C_password = '$Con_password'
	where Reg_ID  = '$id'";

				
				
				
if(mysqli_query($conn,$sql)){
	echo "Record updated successfully";
	
	header("Location:RegisterAdmin.php");
	
}

else{
	echo "Cannot update the record";
}

mysqli_close($conn);
				
				
				

?>


