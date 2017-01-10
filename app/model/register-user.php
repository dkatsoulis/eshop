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

session_start();
$formUser = $_POST['username'];
$formPassword = $_POST['password'];
$formEmail = $_POST['email'];

$sql = "INSERT INTO Users (username, password, email, isAdmin)
VALUES ('$formUser', '$formPassword', '$formEmail', '0')";

if ($conn -> query($sql) === TRUE) {
	$_SESSION["hasSignedup"] = 1;
	$_SESSION["modalMessage"] = 'Successful User Signup.';
	$host = $_SERVER['HTTP_HOST'];
	//$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	//$extra = 'mypage.php';
	header("Location: http://$host$uri/$extra");
	exit ;
} else {
	echo "Error: " . $sql . "<br>" . $conn -> error;
}

$conn -> close();
?>
