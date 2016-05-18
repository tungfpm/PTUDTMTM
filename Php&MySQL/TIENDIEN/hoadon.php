<?php
require_once("database.php");
class hoadon extends database{
	public $_mahd;
	public $_maphong;
	public $_chisodau;
	public $_chisocuoi;
	public $_thanhtien;

	public function __construct(){
		$this->connect();
	}
	public function set_mahd($mhd){
		$this->_mahd = $mhd;
	}
	public function get_mahd(){
		return $this->_mahd;
	}
	public function set_maphong($mp){
		$this->_maphong = $mp;
	}
	public function get_maphong(){
		return $this->_maphong;
	}
	public function set_chisodau($csd){
		$this->_chisodau = $csd;
	}
	public function get_chisodau(){
		return $this->_chisodau;;
	}
	public function set_chisocuoi($csc){
		$this->_chisocuoi = $csc;
	}
	public function get_chisocuoi(){
		return $this->_chisocuoi;
	}
	public function set_thanhtien($tt){
		$this->_thanhtien = $tt;
	}
	public function get_thanhtien(){
		return $this->_thanhtien;
	}

	public function list_hd(){
		$sql = "select * from HDTienDien";
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

	public function list_phong(){
		$sql = "select * from phong";
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

	public function get_tenphong($mp){
		$sql = "select * from Phong where MaPhong = '$mp'";
		$this->query($sql);
		if ($this->num_rows() == 0) {
			$data = 0;
		} else {
			while ($row = $this->fetch()) {
				$data = $row;
			}			 
		}
		return $data;
	}

	public function check_hd(){
		$sql = "select * from HDTienDien where MaHD ='".$this->get_mahd()."'";
		$this->query($sql);
		if ($this->num_rows() == 0) {
			return true;
		} else {
			return false;
		}
	}

	public function insert(){
			$sql = "insert into HDTienDien(MaHD,MaPhong,ChiSoDau,ChiSoCuoi,ThanhTien) values('".$this->get_mahd()."',
				'".$this->get_maphong()."','".$this->get_chisodau()."','".$this->get_chisocuoi()."','".
				$this->get_thanhtien()."')";
			$this->query($sql);
		}

	public function del($mhd){
		$sql = "delete from HDTienDien where MaHD='$mhd'";
		$this->query($sql);
	}
}
/* By Tungfpm */
?>