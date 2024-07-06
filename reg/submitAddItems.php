<?php

require 'config.php';

$fname = $_POST["firname"];
$lname = $_POST["lasname"];
$DOB = $_POST["dateofb"];
$Country = $_POST["country"];
$Gender = $_POST["gen"];
$Email = $_POST["email"];
$MobileNumber = $_POST["phone"];
$Password = $_POST["password"];
$Con_password = $_POST["confirm_password"];


//SQL query
//insert into itemvalues('',"$fname","$lname","$DOB","$Country","$Gender","$Email","$MobileNumber","$Password","$Con_password")

$sql="insert into register_user(Reg_ID,FirstName,LastName,DOB,Country,Gender,Email,Pnumber,Password,C_password) values('','$fname','$lname','$DOB','$Country','$Gender','$Email','$MobileNumber','$Password','$Con_password')";

if(mysqli_query($conn,$sql)){
	echo "Record added successfully";
	
	header("Location:RegisterAdmin.php");
	
}

else{
	echo "Cannot insert the record";
}

mysqli_close($conn);



?>