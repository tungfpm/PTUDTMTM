<?php
	require_once("../database.php");
	class types extends database{
		public $_maloai;
		public $_tenloai;
		
		
		public function __construct(){
			$this->connect();
		}

		public function set_maloai($ml){
			$this->_maloai = $ml;
		}
		public function get_maloai(){
			return $this->_maloai;
		}

		public function set_tenloai($tl){
			$this->_tenloai = $tl;
		}
		public function get_tenloai(){
			return $this->_tenloai;
		}

		public function list_types(){
		$sql = "select * from types";
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

		public function insert_types(){
			$sql = "insert into types(maloai,tenloai) values('".$this->get_maloai()."','".$this->get_tenloai()."')";
			$this->query($sql);
		}

		public function check_types_ml(){
			$sql = "select * from types where maloai='".$this->get_maloai()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function check_types_tl(){
			$sql = "select * from types where tenloai='".$this->get_tenloai()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function get_typesdata($ml){
			$sql = "select * from types where maloai ='$ml'";
			$this -> query($sql);
			return $this -> fetch();
		}

		public function update_types($ml){
			$sql = "update types set tenloai='".$this->get_tenloai()."' where maloai='$ml'";
			$this->query($sql);
		}

		public function del_types($ml){
			$sql="delete from types where maloai='$ml'";
			$this->query($sql);
		}
	}
?>