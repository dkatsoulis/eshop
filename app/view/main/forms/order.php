<div class="order-product-list">
	<input id="orderbutton" type="submit" value="Order" />
	<table id="example" class="display">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th> </th>
			</tr>
		</thead>
		<tbody>
			<?php
				$total = 0.00;
				$price = 0.00;
				if (isset($_SESSION["orderProducts"])){
					$orderProductList = $_SESSION["orderProducts"];
					foreach ($orderProductList as $product){
			?>
						<tr>
							<td><?php echo $product['name']; ?></td>
							<td><?php echo $product['description']; ?></td>
							<td><?php
							$price = ($product['price']) - ((float)$product['price'] / 100 * $product['offer']);
							echo $price;
							$total += $price;
							?>€</td>
							<td><a class="grid-link" rel="external" href="app/controller/delete-order-product.php?id=<?php echo $product['productId']; ?>">Delete</a></td>
						</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
	<div class="total">Total <?php 
								echo $total;
								$_SESSION["orderTotal"] = $total;
							?>€</div>
</div>