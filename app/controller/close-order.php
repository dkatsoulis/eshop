<?php
include ("../model/order/order.php");
session_start();

$order = new order();
if (isset($_SESSION["orderTotal"]) && $_SESSION["orderTotal"] != 0) {
	if (isset($_SESSION["orderId"])) {
		if ($order -> closeOrder($_SESSION["orderId"], $_SESSION["orderTotal"]) == TRUE) {
			unset($_SESSION["orderId"]);
			unset($_SESSION["orderProducts"]);
			$_SESSION["page"] = 'main';
			$host = $_SERVER['HTTP_HOST'];
			header("Location: http://$host/app/controller/get-main-products.php");
			exit ;
		}
	}
} else {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
	exit ;
}
?>