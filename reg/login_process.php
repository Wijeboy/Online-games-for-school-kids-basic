
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
 $email = $_POST["mail"];
 $password = $_POST["password"];

// Insert user data into the database
$sql="insert into login(Login_id,Email,Password) values('','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
        alert("Login successful. Click OK to proceed to the home page.");
        window.location.href = "Home3.html"; 
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	
	header("Location:Home3.php");
}

$conn->close();
?>
	
	

