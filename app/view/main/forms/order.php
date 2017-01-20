<div class="order-product-list">
	<table id="example" class="display">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$total = 0.00;
				$orderProductList = $_SESSION["orderProducts"];
				foreach ($orderProductList as $product){
			?>
			<tr>
				<td><?php echo $product['name']; ?></td>
				<td><?php echo $product['description']; ?></td>
				<td><?php echo ($product['price']) - ((float) $product['price'] / 100 * $product['offer']); ?>€</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<div class="total">Total</div>
</div>