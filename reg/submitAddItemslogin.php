<?php

require 'config.php';

$Email = $_POST["mail"];
$Password = $_POST["password"];


$sql="insert into login(Login_id,Email,Password) values('','$Email','$Password')";

if(mysqli_query($conn,$sql)){
	echo "Record added successfully";
	
	header("Location:LoginAdmin.php");
	
}

else{
	echo "Cannot insert the record";
}

mysqli_close($conn);



?>