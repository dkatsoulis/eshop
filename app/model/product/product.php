<?php
include ("../model/db-connect.php");
class product {
	private $connect;
	public $result = array();
	public function __construct() {
		$this -> connect = new dbConnect();
	}

	public function addProduct($Name, $Image, $Description, $Price, $Offer, $Main) {
		$sql = "INSERT INTO products (name, image, description, price, offer, main) VALUES ('$Name', '$Image', '$Description', '$Price', '$Offer', $Main)";

		if ($this -> connect -> save($sql) == TRUE) {
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function updateProduct($Id, $Name, $Image, $Description, $Price, $Offer, $Main) {
		if (isset($Image) && $Image != '') {
			$sql = "UPDATE products SET name = '$Name', image = '$Image', description = '$Description', price = '$Price', offer = '$Offer', main = $Main WHERE id = $Id";
		} else {
			$sql = "UPDATE products SET name = '$Name', description = '$Description', price = '$Price', offer = '$Offer', main = $Main WHERE id = $Id";
		}

		if ($this -> connect -> save($sql) == TRUE) {
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function editProduct($Id) {
		$sql = "SELECT * FROM products WHERE id = $Id";

		if ($this -> connect -> getProduct($sql) == TRUE) {
			$row = mysqli_fetch_assoc($this -> connect -> result);
			$this -> result = $row;
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function getProductList() {
		$sql = "Select * FROM products";

		if ($this -> connect -> getProduct($sql) == TRUE) {
			while ($row = mysqli_fetch_assoc($this -> connect -> result)) {
				array_push($this -> result, $row);
			}
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

	public function getMainProducts() {
		$sql = "Select * FROM products WHERE main = 1";

		if ($this -> connect -> getProduct($sql) == TRUE) {
			while ($row = mysqli_fetch_assoc($this -> connect -> result)) {
				array_push($this -> result, $row);
			}
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}

}
?>