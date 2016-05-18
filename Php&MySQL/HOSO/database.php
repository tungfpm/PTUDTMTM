<?php
class database{
	private $hostname = "localhost";
	private $userhost = "tungfpm";
	private $passhost = "tungzpm";
	private $dbname = "hoso";
	private $conn = "";
	private $result = "";

	public function connect(){
		$this->conn = mysql_connect($this->hostname,$this->userhost,$this->passhost);
		mysql_select_db($this->dbname,$this->conn) or die("Can't connect");
	}

	public function disconnet(){
		if ($this->conn) {
			mysql_close($this->conn);
		}
	}

	public function query($sql){
		$this->result = mysql_query($sql);
	}

	public function num_rows(){
		if ($this->result) {
			$row = mysql_num_rows($this->result);
		} else {
			$row = 0;
		}
		return $row;
	}

	public function fetch(){
		if ($this->result) {
			$data = mysql_fetch_assoc($this->result);
		} else {
			$data = 0;
		}
		return $data;
	}
}

	// $db = new database;
	// $db->connect();
	// $sql = "select * from sach";
	// $db->query($sql);
	// $row = $db->num_rows();
	// echo $row;
	// while ($data=$db->fetch()) {
	// 	echo "<pre>";
	// 	print_r($data);
	// 	echo "</pre>";
	// 	echo $data['Tensach'];
	// }
/* By Tungfpm */
?>