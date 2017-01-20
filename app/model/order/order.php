<?php
include ("../model/db-connect.php");
class order {
	private $connect;
	public $result = array();
	public function __construct() {
		$this -> connect = new dbConnect();
	}

	public function openOrder($UserId) {
		$sql = "INSERT INTO orders (userId, price, status) VALUES ($UserId, 0, 1)";

		if ($this -> connect -> save($sql) == TRUE) {
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function addOrderProduct($OrderId, $ProductId) {
		$sql = "INSERT INTO orderproducts (orderId, productId) VALUES ($OrderId, $ProductId)";

		if ($this -> connect -> save($sql) == TRUE) {
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function closeOrder($OrderId, $Price) {
		$sql = "UPDATE orders SET price = ('$Price'), status = 0 WHERE id = $OrderId";

		if ($this -> connect -> save($sql) == TRUE) {
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function selectOpenOrder($UserId) {
		$sql = "SELECT * FROM orders WHERE userId = $UserId && status = 1";

		if ($this -> connect -> getOrder($sql) == TRUE) {
			$row = mysqli_fetch_assoc($this -> connect -> result);
			$this -> result = $row;
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}
	
	public function getOrderList($UserId) {
		$sql = "SELECT * FROM orders WHERE userId = $UserId && status = 0";

		if ($this -> connect -> getOrder($sql) == TRUE) {
			while ($row = mysqli_fetch_assoc($this -> connect -> result)) {
				array_push($this -> result, $row);
			}
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function getOrderProductList($OrderId) {
		$sql = "SELECT * FROM orderproducts INNER JOIN products ON products.id = orderproducts.productId  WHERE orderId = $OrderId";

		if ($this -> connect -> getProduct($sql) == TRUE) {
			$this -> result = array();
			while ($row = mysqli_fetch_assoc($this -> connect -> result)) {
				array_push($this -> result, $row);
			}
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function deleteOrderProduct($OrderId, $ProductId) {
		$sql = "DELETE FROM orderproducts WHERE orderId = $OrderId && productId = $ProductId LIMIT 1";

		if ($this -> connect -> save($sql) == TRUE) {
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

}
?>