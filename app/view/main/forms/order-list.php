<div class="order-list">
	<table id="example" class="display">
		<thead>
			<tr>
				<th>ID</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if (isset($_SESSION["orderList"])){
					$orderList = $_SESSION["orderList"];
					foreach ($orderList as $order){
			?>
						<tr>
							<td><?php echo $order['id']; ?></td>
							<td><?php echo $order['price']; ?></td>
						</tr>
			<?php
					}
				}
				Kint::enabled(false);
				ddd($orderList);
				Kint::trace();			
			?>
		</tbody>
	</table>
</div>