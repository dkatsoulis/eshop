<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Our First HTML5 Page</title>
	<meta name="description" content="Welcome to my basic template.">
	<link rel="stylesheet" href="../css/admin-form.css">
</head>

<body>
	<?php
	session_start();
	if($_SESSION["isAdmin"] == 0) {
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host");
	}
	$editMode = false;
	if (isset($_SESSION["Product"])) {
		$editMode = true;
	}
	?>
	<header class="body">
		<?php if ($editMode){
		?>
		<h1>Edit Product</h1>
		<?php } else{ ?>
		<h1>Add Product</h1>
		<?php } ?>
	</header>

	<section class="body">
		<form action="../app/controller/get-product-data.php" method="post" enctype="multipart/form-data">
			<input name="id" type="hidden"

			<?php if ($editMode) { ?>
					value="<?php echo $_SESSION["Product"]['id'];
				}?>">
				
			<label>Name</label>
			<input name="name" placeholder="Type Product Name"
			<?php if ($editMode){ ?>
			value="<?php echo $_SESSION["Product"]['name'];
				}
			?>">
			<label>Image</label>
			<input name="image" type="file"
			<?php if ($editMode){ ?>
					value="<?php echo $_SESSION["Product"]['image']; 
				}?>">

			<label>Description</label>
			<textarea name="description" placeholder="Type Product Description"><?php
				if ($editMode) { echo $_SESSION["Product"]['description'];
				}?></textarea>																		
			
 			<label>Price</label>
			<input name="price" type="number" placeholder="Type Price"
			<?php if ($editMode){ ?>
			value="<?php echo $_SESSION["Product"]['price'];
				}
			?>">

			<label>Offer</label>
			<input name="offer" type="number" placeholder="Type Offer"
			<?php if ($editMode){ ?>
			value="<?php echo $_SESSION["Product"]['offer'];
				}
			?>">

			<label class="form-main-label">Main</label>
			<input class="form-main" name="main" type="checkbox"
			<?php
				if ($editMode) {
					if ($_SESSION["Product"]['main'] == 1) {
						echo "checked";
					};
				}
			?>>

			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
	</section>
</body>
</html>