<?php
	require("database.php");
	class book extends database{
		public $_masach;
		public $_tensach;
		public $_soluong;
		public $_giathanh;

		public function __construct(){
			$this->connect();
		}
		public function set_masach($ms){
			$this->_masach = $ms;
		}
		public function get_masach(){
			return $this->_masach;
		}
		public function set_tensach($ts){
			$this->_tensach = $ts;
		}
		public function get_tensach(){
			return $this->_tensach;
		}
		public function set_soluong($sl){
			$this->_soluong = $sl;
		}
		public function get_soluong(){
			return $this->_soluong;
		}
		public function set_giathanh($gt){
			$this->_giathanh = $gt;
		}
		public function get_giathanh(){
			return $this->_giathanh;
		}

		public function list_book(){
			$sql = "select * from tbSach";
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

		public function insert_book(){
			$sql = "insert into tbSach(masach,tensach,soluong,giathanh) values('".$this->get_masach()."',
				'".$this->get_tensach()."','".$this->get_soluong()."','".$this->get_giathanh()."')";
			$this->query($sql);
		}

		public function check_idbook(){
			$sql = "select * from tbSach where masach='".$this->get_masach()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function check_book(){
			$sql = "select * from tbSach where tensach='".$this->get_tensach()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function check_bk($ts){
			if ($this->get_tensach() != $ts) {
				$sql ="select * from tbSach where tensach='".$this->get_tensach()."'";
			} else {
				$sql ="select * from tbSach where tensach='19121994'";
			}
			$this -> query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function get_bookdata($ms){
			$sql = "select * from tbSach where masach ='$ms'";
			$this -> query($sql);
			return $this -> fetch();
		}

		public function update_book($ms){
			$sql = "update tbSach set tensach='".$this->get_tensach()."', soluong='".$this->get_soluong()."', 
			giathanh='".$this->get_giathanh()."' where masach='$ms'";
			$this->query($sql);
		}

		public function del_book($ms){
			$sql="delete from tbSach where masach='$ms'";
			$this->query($sql);
		}
	}
?>