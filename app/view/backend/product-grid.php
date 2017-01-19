<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Our First HTML5 Page</title>
	<meta name="description" content="Welcome to my basic template.">
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>
	<script src="../js/datatable.js"></script>
</head>

<body>
	<header>
		<h1>Product List</h1>
	</header>
	<input id="gobutton" type="submit" value="Add Product" />
	<table id="example" class="display">
		<thead>
			<tr>
				<th>Name</th>
				<th>Image</th>
				<th>Description</th>
				<th>Price</th>
				<th>Offer</th>
				<th>Main</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Name</th>
				<th>Image</th>
				<th>Description</th>
				<th>Price</th>
				<th>Offer</th>
				<th>Main</th>
				<th>Actions</th>
			</tr>
		</tfoot>
		<tbody>
			<?php
				session_start();
				if($_SESSION["isAdmin"] == 0) {
					$host = $_SERVER['HTTP_HOST'];
					header("Location: http://$host/");
				}
				$productList = $_SESSION["Products"];
				foreach ($productList as $product){
			?>
			<tr>
				<td><?php echo $product['name']; ?></td>
				<td><?php echo $product['image']; ?></td>
				<td><?php echo $product['description']; ?></td>
				<td><?php echo $product['price']; ?></td>
				<td><?php echo $product['offer']; ?></td>
				<td><input onclick="return false;" type="checkbox" 
					<?php
					if ($product['main'] == 1)
						echo "checked";
					?>
				></td>
				<td><a href="app/controller/get-product-data.php?id=<?php echo $product['id']; ?>" class="edit-product">Edit</a></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>