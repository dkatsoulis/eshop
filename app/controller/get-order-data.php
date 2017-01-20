<?php
include ("../model/order/order.php");
session_start();

$order = new order();
if (isset($_GET['id'])) {
	$productId = $_GET['id'];
	if (isset($_SESSION["userid"])) {
		if (isset($_SESSION["orderId"]) == false) {
			if ($order -> openOrder($_SESSION["userid"]) == TRUE) {
				if ($order -> selectOpenOrder($_SESSION["userid"]) == TRUE) {
					$_SESSION["orderId"] = $order -> result['id'];
				}
			}
		}
		if ($order -> addOrderProduct($_SESSION["orderId"], $productId) == TRUE) {
			if ($order -> getOrderProductList($_SESSION["orderId"]) == TRUE) {
				$_SESSION["orderProducts"] = $order -> result;
			}

			$_SESSION["page"] = 'cart';
			$host = $_SERVER['HTTP_HOST'];
			header("Location: http://$host/app/controller/get-main-products.php");
			exit ;
		}
	} else {
		$_SESSION["userExists"] = 0;
		$_SESSION["modalMessage"] = 'User not logged in. Please log in to make an order.';
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/app/controller/get-main-products.php");
		exit ;
	}
} elseif (isset($_SESSION["orderId"])) {
	if ($order -> getOrderProductList($_SESSION["orderId"]) == TRUE) {
		$_SESSION["orderProducts"] = $order -> result;
		$_SESSION["page"] = 'cart';
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/app/controller/get-main-products.php");
		exit ;
	}
} elseif (isset($_SESSION["userid"]) && (isset($_SESSION["orderId"]) == false)) {
	if ($order -> selectOpenOrder($_SESSION["userid"]) == TRUE) {
		$_SESSION["orderId"] = $order -> result['id'];
	}
	if ($order -> getOrderProductList($_SESSION["orderId"]) == TRUE) {
		$_SESSION["orderProducts"] = $order -> result;
	}
	$_SESSION["page"] = 'cart';
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