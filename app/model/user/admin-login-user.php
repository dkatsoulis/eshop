<?php
include ("../model/db-connect.php");
class login {
	private $connect;
	public $result;
	public function __construct() {
		$this -> connect = new dbConnect();
	}

	public function loginAdmin($Username, $Password) {
		$sql = "SELECT id, username FROM users WHERE username = '$Username' && password = SHA('$Password') && isAdmin = 1";

		if ($this -> connect -> getUser($sql) == TRUE) {
			$row = mysqli_fetch_assoc($this -> connect -> result);
			$this -> result = $row;
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}
}
?>