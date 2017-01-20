<?php
session_start();

if (isset($_GET['page'])) {
	$page = $_GET['page'];
	$_SESSION["page"] = $page;
} else {
	$_SESSION["page"] = 'main';
}
if ($page == 'cart') {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-order-data.php");
	exit ;
} else {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
	exit ;
}
?>