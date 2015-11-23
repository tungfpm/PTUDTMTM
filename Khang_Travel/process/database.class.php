<?php 
	class database{
		private $hostName='localhost';
		private $userName='root';
		private $password='';
		private $dbName='travel';
		private $connect=Null;
		private $result=Null;

		function __construct()
		{
			
		}
		function connect_dbc(){
			$this->connect=mysqli_connect($this->hostName, $this->userName, $this->password, $this->dbName);
		}
		function disconnect(){
			if ($this->connect) {
				mysqli_close($this->connect);
			}
		}
		function query($sql){
			$this->result=mysqli_query($this->connect,$sql);
		}
		function numRows(){
			if ($this->result) {
				$row=mysqli_num_rows($this->result);
			}else{
				$row=0;
			}
			return $row;
		}
		function fetch(){
			if ($this->result) {
				$data=mysqli_fetch_assoc($this->result);
			}else{
				$data=0;
			}
			return $data;
		}
		public function getArray(){
			if($this->result) {
				$data=mysqli_fetch_array($this->result,MYSQL_ASSOC);	
			}
			else {
				$data=0;
			}
			return $data;
		}
		public function affected(){
			if ($this->result) {
				$data=mysqli_affected_rows($this->connect);
			}else{
				$data=0;
			}
			return $data;
		}
		
		
	}
 ?>