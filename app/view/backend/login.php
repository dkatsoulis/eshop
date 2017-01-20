<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<meta name="description" content="Admin Area">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="../css/modal.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/login.js"></script>
</head>

<body>
	<form action="app/controller/get-admin-login-data.php" method="post">
		<h2>Login</h2>
		<button class="submit">
			<span>»</span>
		</button>
		<input type="text" class="user" placeholder="username" name="username"/>
		<input type="password" class="pass"placeholder="password" name="password"/>
	</form>
	<?php
	session_start();
	if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 1) {
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/app/controller/get-product-list.php");
	}
	if (isset($_SESSION["userExists"]) && $_SESSION["userExists"] == 0) {
		include ("../main/modal.php");
		unset($_SESSION["userExists"]);
	}
	?>
</body>
</html>