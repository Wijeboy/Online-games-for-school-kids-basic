<?php

require 'config.php';

$Payid = $_POST["pcode"];
$Cardholname = $_POST["cardholderName"];
$Expd = $_POST["expireDate"];
$cvv = $_POST["cvv"];
$cnumb = $_POST["cardNumber"];




$sql="insert into payment(Payment_ID,Cardhol_name,Exp_date,CVV,Card_number) values('','$Cardholname','$Expd','$cvv','$cnumb')";

if(mysqli_query($conn,$sql)){
	echo "Record added successfully";
	
	header("Location:PaymentAdmin.php");
	
}

else{
	echo "Cannot insert the record";
}

mysqli_close($conn);



?>