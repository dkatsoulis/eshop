<?php
$servername = "localhost";
$username = "root";
$password = "eshop";
$dbname = "eshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}

$formUser = $_POST['username'];
$formPassword = $_POST['password'];
$formEmail = $_POST['email'];

$sql = "INSERT INTO Users (username, password, email, isAdmin)
VALUES ('$formUser', '$formPassword', '$formEmail', '0')";

if ($conn -> query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn -> error;
}

$conn -> close();
?>
