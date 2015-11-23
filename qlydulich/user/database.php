<?php
	class database{
		private $hostname = "localhost";
		private $username = "root";
		private $password = "";
		private $database = "qlydulich";
		private $conn;
		private $result;

		public function connect(){
			$this->conn = mysql_connect($this->hostname,$this->username,$this->password);
			mysql_select_db($this->database,$this->conn) or die("Can't connect to DB");
		}
		public function disconnect(){
			if($this -> conn){
				mysql_close($this -> conn);
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

	
?>