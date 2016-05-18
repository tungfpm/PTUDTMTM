<?php
require_once("database.php");
class book extends database{
	private $_masach;
	private $_tensach;
	private $_tacgia;
	private $_namxb;
	private $_manhaxb;

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
	public function set_tacgia($tg){
		$this->_tacgia = $tg;
	}
	public function get_tacgia(){
		return $this->_tacgia;;
	}
	public function set_namxb($nxb){
		$this->_namxb = $nxb;
	}
	public function get_namxb(){
		return $this->_namxb;
	}
	public function set_manhaxb($manxb){
		$this->_manhaxb = $manxb;
	}
	public function get_manhaxb(){
		return $this->_manhaxb;
	}

	public function list_book(){
		$sql = "select * from tblsach";
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

	public function list_nhaxb(){
		$sql = "select * from tblnhaxb";
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

	public function get_nhaxb($manxb){
		$sql = "select * from tblnhaxb where manhaXB = '$manxb'";
		$this->query($sql);
		return $this->fetch();
	}

	public function check_book($ms,$ts){
		$sql = "select * from tblsach where masach ='$ms' or tensach='$ts'";
		$this->query($sql);
		if ($this->num_rows() == 0) {
			return true;
		} else {
			return false;
		}
	}

	public function check_bk($ts){
		$sql = "select * from tblsach where tensach ='".$this->get_tensach()."' and tensach !='$ts'";
		$this->query($sql);
		if ($this->num_rows() == 0) {
			return true;
		} else {
			return false;
		}		
	}

	public function get_data($ms){
		$sql = "select * from tblsach where masach = '$ms'";
		$this->query($sql);
		return $this->fetch();
	}

	public function insert_book(){
		$sql = "insert into tblsach(masach,tensach,tacgia,namXB,manhaXB) 
		values ('".$this->get_masach()."','".$this->get_tensach()."','".$this->get_tacgia()."',
			'".$this->get_namxb()."','".$this->get_manhaxb()."')";
		$this->query($sql);
	}

	public function update_book($ms){
		$sql = "update tblsach set tensach ='".$this->get_tensach()."', tacgia = '".$this->get_tacgia()."',
		namXB = '".$this->get_namxb()."', manhaXB = '".$this->get_manhaxb()."'  where masach = '$ms'";		
		$this->query($sql);
	}

	public function del_book($ms){
		$sql = "delete from tblsach where masach='$ms'";
		$this->query($sql);
	}
}
/* By Tungfpm */
?>