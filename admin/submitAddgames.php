<?php

require 'config.php';

$gimage = $_POST["gameimage"];
$gname = $_POST["gamename"];
$gdes = $_POST["gameDes"];
$gdev = $_POST["gamedevelop"];
$gpub = $_POST["gamepublish"];
$sysreq = $_POST["systemReq"];


$sql="insert into games(Game_Id,G_Image,Name,G_Description,Developer,Publisher,System_Req) values('','$gimage','$gname','$gdes','$gdev','$gpub','$sysreq')";

if(mysqli_query($conn,$sql)){
	echo "Record added successfully";
	
	header("Location:Admin.php");
	
}

else{
	echo "Cannot insert the record";
}

mysqli_close($conn);

?>