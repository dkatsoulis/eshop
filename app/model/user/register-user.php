<?php
include ("../model/db-connect.php");
class signup {
	private $connect;
	public function __construct() {
		$this -> connect = new dbConnect();
	}

	public function signupUser($User, $Password, $Email) {
		$sql = "INSERT INTO users (username, password, email, isAdmin) VALUES ('$User', SHA('$Password'), '$Email', '0')";

		if ($this -> connect -> save($sql) == TRUE) {
			return TRUE;
		} else {
			echo $this -> connect -> error;
		}
	}
}
?>