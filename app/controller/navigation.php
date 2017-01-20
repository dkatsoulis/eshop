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
} elseif ($page == 'orders') {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-order-list.php");
	exit ;
} elseif ($page == 'aboutus') {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
	exit ;
} elseif ($page == 'contact') {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
	exit ;
}
else {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php");
	exit ;
}
?>