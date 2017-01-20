<?php
class dbConnect {
	private $servername = "localhost";
	private $username = "root";
	private $password = "eshop";
	private $dbname = "eshop";

	private $connect;
	public $error;
	public $result;
	//private static $dbInstance;

	public function __construct() {
		try {
			// Create connection
			$this -> connect = new mysqli($this -> servername, $this -> username, $this -> password, $this -> dbname);
			// Check connection
			if (mysqli_connect_error()) {
				die('connection error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
			}
		} catch(Exception $e) {
			$this -> error = $e -> getMessage();
		}
	}

	public function save($sql) {
		if ($this -> connect -> query($sql) === TRUE) {
			return TRUE;
		} else {
			$this -> error = "Error: " . $sql . "<br>" . $this -> connect -> error;
			return FALSE;
		}
	}

	public function getUser($sql) {
		if ($result = mysqli_query($this -> connect, ($sql))) {
			$this -> result = $result;
			return TRUE;
		} else {
			$this -> error = "Error: " . $sql . "<br>" . $this -> connect -> error;
			return FALSE;
		}
	}
	
	public function getProduct($sql) {
		if ($result = mysqli_query($this -> connect, ($sql))) {
			$this -> result = $result;
			return TRUE;
		} else {
			$this -> error = "Error: " . $sql . "<br>" . $this -> connect -> error;
			return FALSE;
		}
	}
	
	public function getOrder($sql) {
		if ($result = mysqli_query($this -> connect, ($sql))) {
			$this -> result = $result;
			return TRUE;
		} else {
			$this -> error = "Error: " . $sql . "<br>" . $this -> connect -> error;
			return FALSE;
		}
	}
}
?>