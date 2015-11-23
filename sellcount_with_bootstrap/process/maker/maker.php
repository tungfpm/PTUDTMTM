<?php
	require_once("../database.php");
	class maker extends database{
		public $_mahang;
		public $_tenhang;

		public function __construct(){
			$this->connect();
		}
		public function set_mahang($ms){
			$this->_mahang = $ms;
		}
		public function get_mahang(){
			return $this->_mahang;
		}
		public function set_tenhang($ts){
			$this->_tenhang = $ts;
		}
		public function get_tenhang(){
			return $this->_tenhang;
		}
		

		// public function check_maker(){
		// 	$sql = "select * from maker where mahang='".$this->get_mahang()."'
		// 	and tenhang='".$this->get_tenhang()."'";
		// 	$this->query($sql);
		// 	if ($this->num_rows() == 0) {
		// 		return false;
		// 	} else {
		// 		return $this->fetch();
		// 	}
		// }

		public function list_maker(){
			$sql = "select * from maker";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				$data = 0;
			} else {
				while ($row = $this->fetch()) {
					$data[] = $row;
				}
			}
			return $data;
		}


		public function insert_maker(){
			$sql = "insert into maker(mahang,tenhang) values('".$this->get_mahang()."','".$this->get_tenhang()."')";
			$this->query($sql);
		}

		public function check_maker_mh(){
			$sql = "select * from maker where mahang='".$this->get_mahang()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function check_maker_th(){
			$sql = "select * from maker where tenhang='".$this->get_tenhang()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function get_makerdata($mh){
			$sql = "select * from maker where mahang ='$mh'";
			$this -> query($sql);
			return $this -> fetch();
		}

		public function update_maker($mh){
			$sql = "update maker set tenhang='".$this->get_tenhang()."' where mahang='$mh'";
			$this->query($sql);
		}

		public function del_maker($mh){
			$sql="delete from maker where mahang='$mh'";
			$this->query($sql);
		}
	}
	
?>