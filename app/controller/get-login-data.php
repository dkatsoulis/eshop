<?php
include ("../model/user/login-user.php");
session_start();

$login = new login();
$formPassword = $_POST['password'];
$formEmail = $_POST['email'];

if ($login -> loginUser($formPassword, $formEmail) == TRUE) {
	if (empty($login -> result)) {
		$_SESSION["userExists"] = 0;
		$_SESSION["modalMessage"] = 'User does not exist. Please sign up.';
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host");
		exit ;
	} else {
		$_SESSION["username"] = $login -> result['username'];
		$_SESSION["userid"] = $login -> result['id'];
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host");
		exit ;
	}
}
?>