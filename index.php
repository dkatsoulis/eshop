<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Our First HTML5 Page</title>
	<meta name="description" content="Welcome to my basic template.">
	<link rel="stylesheet" href="css/style.css?v=1">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/reset.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
</head>

<body>
	<div id="wrapper">
		<header>
			<?php
			session_start();
			include ("app/view/main/header.php");
			include ("app/view/main/menu.php");
			include ("app/view/main/forms.php");
			include ("app/view/main/offers.php");
			if ($_SESSION["hasSignedup"] == 1) {
				include ("app/view/main/modal.php");
				$_SESSION["hasSignedup"] = 0;
			}
			?>
		</header>
		<footer>
			<?php
			include ("app/view/main/footer.php");
			?>
		</footer>
	</div>
</body>
</html>