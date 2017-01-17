<?php
include ("../model/user/admin-login-user.php");
session_start();

$login = new login();
$formUsername = $_POST['username'];
$formPassword = $_POST['password'];

if ($login -> loginAdmin($formUsername, $formPassword) == TRUE) {
	if (empty($login -> result)) {
		$_SESSION["userExists"] = 0;
		$_SESSION["modalMessage"] = 'Wrong username or password.';
		$host = $_SERVER['HTTP_HOST'];
		echo $_SESSION["userExists"];
		echo '  ';
		echo $_SESSION["modalMessage"];
		header("Location: http://$host/admin");
		exit ;
	} else {
		$_SESSION["username"] = $login -> result['username'];
		$_SESSION["userid"] = $login -> result['id'];
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/app/view/backend/add-product.php");
		exit ;
	}
}
?>