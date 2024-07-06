<?php

require 'config.php';

$gameID = $_GET['id'];//copy from editRecord.php

$sql = "delete from games where Game_Id = '$gameID'";

if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully";
	
	header("Location:Admin.php");
	
}

else{
	echo "<script>alert('Cannot insert the record')</script>";
}

mysqli_close($conn);

?>