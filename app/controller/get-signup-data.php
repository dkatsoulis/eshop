<?php
include ("../model/user/register-user.php");
session_start();

$register = new signup();
$formUser = $_POST['username'];
$formPassword = $_POST['password'];
$formEmail = $_POST['email'];

if ($register -> signupUser($formUser, $formPassword, $formEmail) == TRUE) {
	$_SESSION["hasSignedup"] = 1;
	$_SESSION["modalMessage"] = 'Successful User Signup.';
	$host = $_SERVER['HTTP_HOST'];
	//$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	//$extra = 'mypage.php';
	header("Location: http://$host$uri/$extra");
	exit ;
}
?>