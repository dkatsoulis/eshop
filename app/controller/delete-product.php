<?php
include ("../model/product/product.php");
session_start();

$product = new product();
$id = $_GET['id'];

if ($product -> deleteProduct($id) == TRUE) {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-product-list.php");
	exit ;
}
?>