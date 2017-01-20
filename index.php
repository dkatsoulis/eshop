<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Our First HTML5 Page</title>
	<meta name="description" content="Welcome to my basic template.">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/datatable.js"></script>
	<script src="js/index.js"></script>
</head>

<body>
	<div id="wrapper">
		<header>
			<?php
			include ("app/view/main/content.php");
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