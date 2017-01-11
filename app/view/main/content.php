<?php
session_start();
include ("app/view/main/header.php");
include ("app/view/main/menu.php");
include ("app/view/main/forms.php");
include ("app/view/main/offers.php");
if (isset($_SESSION["hasSignedup"]) && $_SESSION["hasSignedup"] == 1) {
	include ("app/view/main/modal.php");
	$_SESSION["hasSignedup"] = 0;
} elseif (isset($_SESSION["userExists"]) && $_SESSION["userExists"] == 0) {
	include ("app/view/main/modal.php");
	unset($_SESSION["userExists"]);
}
?>