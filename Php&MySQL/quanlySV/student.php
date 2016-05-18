<?php
	require_once("database.php");
	class student extends database{
		private $_masv;
		private $_tensv;
		private $_diachi;
		private $_namsinh;
		private $_gtinh;
		private $_lop;
		
		public function __construct(){
			$this->connect();
		}
		public function set_masv($msv){
			$this->_masv = $msv;
		}
		public function get_masv(){
			return $this->_masv;
		}
		public function set_tensv($tsv){
			$this->_tensv = $tsv;
		}
		public function get_tensv(){
			return $this->_tensv;
		}
		public function set_diachi($dc){
			$this->_diachi = $dc;
		}
		public function get_diachi(){
			return $this->_diachi;
		}
		public function set_namsinh($ns){
			$this->_namsinh = $ns;
		}
		public function get_namsinh(){
			return $this->_namsinh;
		}
		public function set_gtinh($gt){
			$this->_gtinh = $gt;
		}
		public function get_gtinh(){
			return $this->_gtinh;
		}
		public function set_lop($l){
			$this->_lop = $l;
		}
		public function get_lop(){
			return $this->_lop;
		}
		
		public function listall(){
			$sql = "select * from sinhvien";
			$this->query($sql);
			if ($this->num_rows() == 0){
				$data = 0;
			} else {
				while($row = $this->fetch()){
					$data [] = $row;
				}
			}
			return $data;
		}
		
		public function check(){
			$sql = "select * from sinhvien where masv = '".$this->get_masv()."'";
			$this->query($sql);
			if ($this->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
		
		public function insert(){
			$sql = "insert into sinhvien(masv,tensv,diachi,namsinh,gtinh,lop) 
			values ('".$this->get_masv()."','".$this->get_tensv()."','".$this->get_diachi()."','".
			$this->get_namsinh()."','".$this->get_gtinh()."','".$this->get_lop()."')";
			$this->query($sql);
		}
		
		function get_data($msv){
			$sql = "select * from sinhvien where masv = '$msv'";
			$this -> query($sql);
			return $this->fetch();
		}
		
		public function check_id($msv){
			$sql = "select * from sinhvien where masv='".$this->get_masv()."' and masv != '$msv'";
			$this->query($sql);
			if ($this->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
		
		public function update($msv){
			$sql = "update sinhvien set tensv ='".$this->get_tensv()."',diachi ='".
				$this->get_diachi()."',namsinh ='".$this->get_namsinh()."',gtinh ='".
				$this->get_gtinh()."',lop ='".$this->get_lop()."' where masv = '$msv'";
				$this->query($sql);
		}
		
		public function del($msv){
			$sql = "delete from sinhvien where masv ='$msv'";
			$this->query($sql);
		}
	}
?>