<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["userid"]);
$host = $_SERVER['HTTP_HOST'];
header("Location: http://$host");
exit ;
?>