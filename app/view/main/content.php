<?php
session_start();
if(isset($_SESSION["mainProducts"]) == false) {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
}

include ("app/view/main/header.php");
include ("app/view/main/menu.php");
include ("app/view/main/forms.php");

if (isset($_SESSION["page"]) == false || $_SESSION["page"] == 'main') {
	include ("app/view/main/offers.php");
} elseif ($_SESSION["page"] == 'cart') {
	include ("app/view/main/forms/order.php");
}

if (isset($_SESSION["hasSignedup"]) && $_SESSION["hasSignedup"] == 1) {
	include ("app/view/main/modal.php");
	$_SESSION["hasSignedup"] = 0;
} elseif (isset($_SESSION["userExists"]) && $_SESSION["userExists"] == 0) {
	include ("app/view/main/modal.php");
	unset($_SESSION["userExists"]);
}
	unset($_SESSION["mainProducts"]);
?>