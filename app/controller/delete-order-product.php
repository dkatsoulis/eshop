<?php
include ("../model/order/order.php");
session_start();

$order = new order();
$id = $_GET['id'];

if (isset($_SESSION["orderId"])) {
	if ($order -> deleteOrderProduct($_SESSION["orderId"], $id) == TRUE) {
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/app/controller/get-order-data.php");
		exit ;
	}
}
?>