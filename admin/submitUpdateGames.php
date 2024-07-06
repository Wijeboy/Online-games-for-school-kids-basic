<?php

require 'config.php';

$id = $_POST["gamecode"];
$image = $_POST["gameimage"];
$name = $_POST["gamename"];
$gdes = $_POST["gameDes"];
$gdev = $_POST["gamedevelop"];
$gpub = $_POST["gamepublish"];
$sysreq = $_POST["systemReq"];

$sql="update games
		set G_Image = '$image',Name = '$name',G_Description = '$gdes',Developer ='$gdev',Publisher = '$gpub',System_Req = '$sysreq'
		where Game_Id = '$id'";

if(mysqli_query($conn,$sql)){
	echo "Record added successfully";
	
	header("Location:Admin.php");
	
}

else{
	echo "Cannot insert the record";
}

mysqli_close($conn);

?>