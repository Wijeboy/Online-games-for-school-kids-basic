
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
$fname = $_POST["firname"];
$lname = $_POST["lasname"];
$DOB = $_POST["dateofb"];
$Country = $_POST["country"];
$Gender = $_POST["gen"];
$Email = $_POST["email"];
$MobileNumber = $_POST["phone"];
$Password = $_POST["password"];
$Con_password = $_POST["confirm_password"];

// Insert user data into the database
$sql="insert into register_user(Reg_ID,FirstName,LastName,DOB,Country,Gender,Email,Pnumber,Password,C_password) values('','$fname','$lname','$DOB','$Country','$Gender','$Email','$MobileNumber','$Password','$Con_password')";

if ($conn->query($sql) === TRUE) {
     echo '<script>
        alert("Registration successful. Click OK to proceed to the home page.");
        window.location.href = "Home3.html"; 
    </script>';
	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
	
	
	

