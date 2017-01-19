<?php
include ("../model/product/product.php");
session_start();

$productList = new product();
if ($productList -> getProductList() == TRUE) {
	$_SESSION["Products"] = $productList -> result;
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/products");
	exit ;
}
?>