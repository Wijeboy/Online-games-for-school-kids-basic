
<?php
	 
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$db = "pixelpulse";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Retrieve user details from the form

$Cardholname = $_POST["cardholderName"];
$Expd = $_POST["expireDate"];
$cvv = $_POST["cvv"];
$cnumb = $_POST["cardNumber"];

// Insert user data into the database
$sql="insert into payment(Payment_ID,Cardhol_name,Exp_date,CVV,Card_number) values('','$Cardholname','$Expd','$cvv','$cnumb')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
        alert("Payment successful. Click OK to proceed to the home page.");
        window.location.href = "Home3.html"; 
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
	
	

