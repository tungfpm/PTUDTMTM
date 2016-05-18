<?php
require_once("database.php");
class book extends database {
	public $_idsach;
	public $_tensach;
	public $_idtacgia;
	public $_nxb;
	public $_namxb;
	public $_gia;
	

	public function __construct(){
		$this->connect();
	}
	public function set_idsach($ms){
		$this->_idsach = $ms;
	}
	public function get_idsach(){
		return $this->_idsach;
	}
	public function set_tensach($ts){
		$this->_tensach = $ts;
	}
	public function get_tensach(){
		return $this->_tensach;
	}
	public function set_idtacgia($tg){
		$this->_idtacgia = $tg;
	}
	public function get_idtacgia(){
		return $this->_idtacgia;;
	}
	public function set_namxb($nxb){
		$this->_namxb = $nxb;
	}
	public function get_namxb(){
		return $this->_namxb;
	}
	public function set_nxb($manxb){
		$this->_nxb = $manxb;
	}
	public function get_nxb(){
		return $this->_nxb;
	}
	public function set_gia($gia){
		$this->_gia = $gia;
	}
	public function get_gia(){
		return $this->_gia;
	}

	public function list_book(){
		$sql = "select * from sach";
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

	public function search($keyword){
		$sql = "select * from sach where tensach like '%$keyword%'";
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

	public function get_tacgia($id){
		$sql = "select * from tacgia where IDTacgia = '$id'";
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

	public function del_book($id){
		$sql = "delete from sach where IDSach='$id'";
		$this->query($sql);
	}
}
/* By Tungfpm */
?>