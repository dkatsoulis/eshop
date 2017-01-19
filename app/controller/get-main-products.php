<?php
include ("../model/product/product.php");
session_start();

$mainProducts = new product();
if ($mainProducts -> getMainProducts() == TRUE) {
	$_SESSION["mainProducts"] = $mainProducts -> result;
	$_SESSION["productsLoaded"] = 1;
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/");
	exit ;
}
?>