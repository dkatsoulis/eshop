<?php
include ("../model/product/product.php");
session_start();

$product = new product();
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	if ($product -> editProduct($id) == TRUE) {
		$_SESSION["Product"] = $product -> result;
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/edit-product");
		exit ;
	}
} elseif (isset($_POST['name'])) {
	$formName = $_POST['name'];
	$formDescription = $_POST['description'];
	$formPrice = $_POST['price'];
	$formOffer = $_POST['offer'];
	$formMain = '0';
	if (isset($_FILES["image"])) {
		$formImage = $_FILES["image"]["name"];
		move_uploaded_file($_FILES["image"]["tmp_name"], "../../images/products/" . $_FILES["image"]["name"]);
	}
	if (isset($_POST['main'])) {
		$formMain = '1';
	}
	if (isset($_POST['id']) && $_POST['id'] > 0) {
		$formId = $_POST['id'];
	}

	if (isset($formId)) {
		if ($product -> updateProduct($formId, $formName, $formImage, $formDescription, $formPrice, $formOffer, $formMain) == TRUE) {
			$host = $_SERVER['HTTP_HOST'];
			header("Location: http://$host/app/controller/get-product-list.php");
			exit ;
		}
	} else {
		if ($product -> addProduct($formName, $formImage, $formDescription, $formPrice, $formOffer, $formMain) == TRUE) {
			$host = $_SERVER['HTTP_HOST'];
			header("Location: http://$host/app/controller/get-product-list.php");
			exit ;
		}
	}
} else {
	unset($_SESSION["Product"]);
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/add-product");
	exit ;
}
?>