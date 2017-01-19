<?php
if(isset($_SESSION["mainProducts"]) == false || isset($_SESSION["productsLoaded"]) == false) {
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/app/controller/get-main-products.php"); 
}

$mainProducts = $_SESSION["mainProducts"];
?>
<div class="offers">
	<?php
	foreach ($mainProducts as $product){
	?>
		<div class="offer">
			<div tooltip="<?php echo $product['description']; ?>">
				<img class="offer-image" alt="Offer" src="images/products/<?php echo $product['image']; ?>">
			</div>
			<div class="price">
				<?php echo $product['price']; ?>€
			</div>
		</div>
	<?php 
	}
	unset($_SESSION["productsLoaded"]);
	?>
</div>
