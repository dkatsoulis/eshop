<?php
if (isset($_SESSION["mainProducts"])){
	$mainProducts = $_SESSION["mainProducts"];
	?>
	<div class="offers">
		<?php
		foreach ($mainProducts as $product){
		?>
			<div class="offer">
				<div class="offer-name"><?php echo $product['name']; ?></div>	
				<div tooltip="<?php echo $product['description']; ?>">			
					<img class="offer-image" alt="Offer" src="images/products/<?php echo $product['image']; ?>">
				</div>
				<div class="price">
					<?php echo($product['price']) - ((float)$product['price'] / 100 * $product['offer']); ?>€
				</div>
				<a href="app/controller/get-order-data.php?id=<?php echo $product['id']; ?>"><div id="<?php echo $product['id']; ?>" class="buy">BUY</div></a>
			</div>
		<?php
		}
		?>
	</div>
<?php
}
?>
