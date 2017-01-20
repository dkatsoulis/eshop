<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["userid"]);
unset($_SESSION["orderId"]);
$host = $_SERVER['HTTP_HOST'];
header("Location: http://$host/app/controller/get-main-products.php");
exit ;
?>