<?php
include ("../model/order/order.php");
session_start();

$order = new order();
if (isset($_SESSION["userid"])) {
	if ($order -> getOrderList($_SESSION["userid"]) == TRUE) {
		$_SESSION["orderList"] = $order -> result;
	}

	$_SESSION["page"] = 'orders';
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
	exit ;
} else {
	$_SESSION["page"] = 'main';
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
	exit ;
}
?>