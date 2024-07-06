<?php

require 'config.php';

$pid = $_POST["pcode"];
$chname = $_POST["cardholderName"];
$expdat = $_POST["expireDate"];
$cvvnumb = $_POST["cvv"];
$cnumber = $_POST["cnumber"];

$sql = "Update payment set Cardhol_name ='$chname',Exp_date ='$expdat',CVV = '$cvvnumb',Card_number = '$cnumber' where Payment_ID   = '$pid'";
				
				
				
if(mysqli_query($conn,$sql)){
	echo "Record updated successfully";
	
	header("Location:PaymentAdmin.php");
	
}

else{
	echo "Cannot update the record";
}

mysqli_close($conn);
				
				
				

?>


