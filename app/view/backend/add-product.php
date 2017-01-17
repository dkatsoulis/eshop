<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Our First HTML5 Page</title>
	<meta name="description" content="Welcome to my basic template.">
	<link rel="stylesheet" href="../../../css/admin-form.css">
</head>

<body>
	<header class="body">
		<h1>Add Product</h1>
	</header>

	<section class="body">
		<form method="post" action="index.php">

			<label>Name</label>
			<input name="name" placeholder="Type Here">

			<label>Email</label>
			<input name="email" type="email" placeholder="Type Here">

			<label>Message</label>
			<textarea name="message" placeholder="Type Here"></textarea>												
            
 			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
	</section>
</body>
</html>

