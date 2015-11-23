<?php
require("database.php");
class tour extends database{
	private $_tour_name, $_tour_time, $_tour_price,$_tour_start,$_tour_end,$_tour_begin,$_tour_image;
	public function __construct(){
		$this->connect();
	}
	public function set_tour_name($_tour_name){
		$this->_tour_name=$_tour_name;
	}
	public function get_tour_name(){
		return $this->_tour_name;
	}
	public function set_tour_time($tour_time){
		$this->_tour_time=$tour_time;
	}
	public function get_tour_time(){
		return $this->_tour_time;
	}
	public function set_tour_price($tour_price){
		$this->_tour_price=$tour_price;
	}
	public function get_tour_price(){
		return $this->_tour_price;
	}
	public function set_tour_start($tour_start){
		$this->_tour_start=$tour_start;
	}
	public function get_tour_start(){
		return $this->_tour_start;
	}
	public function set_tour_end($tour_end){
		$this->_tour_end=$tour_end;
	}
	public function get_tour_end(){
		return $this->_tour_end;
	}
	public function set_tour_begin($tour_begin){
		$this->_tour_begin=$tour_begin;
	}
	public function get_tour_begin(){
		return $this->_tour_begin;
	}
	public function set_tour_image($tour_image){
		$this->_tour_image=$tour_image;
	}
	public function get_tour_image(){
		return $this->_tour_image;
	}
	
	public function listall(){
		$sql="select * from tour order by id desc";
		$this->query($sql);		
		if($this->num_rows()==0)
			$data=0;
		else{
			while($rows=$this->fetch()){
				$data[]=$rows;
			}
		}
		return $data;
	}
	public function hienthi(){
		$sql="select * from tour order by id desc limit 6";
		$this->query($sql);		
		if($this->num_rows()==0)
			$data=0;
		else{
			while($rows=$this->fetch()){
				$data[]=$rows;
			}
		}
		return $data;
	}
	
	public function chitiet($id){
		$sql="select * from tour where id='$id'";
		$this->query($sql);		
		if($this->num_rows()==0)
			$data=0;
		else{
			while($rows=$this->fetch()){
				$data[]=$rows;
			}
		}
		return $data;
	}
	// public function listpage($lim){
		// $sql="select * from tour LIMIT $lim,3 ";
		// $this->query($sql);		
		// if($this->num_rows()==0)
			// $data=0;
		// else{
			// while($rows=$this->fetch()){
				// $data[]=$rows;
			// }
		// }
		// return $data;
	// }
	public function insert_tour_name(){
		$sql="insert into tour(tour_name,tour_time,tour_price,tour_start,tour_begin,tour_end,tour_image) values('".$this->get_tour_name()."', '".$this->get_tour_time()."','".$this->get_tour_price()."','".$this->get_tour_start()."','".$this->get_tour_begin()."','".$this->get_tour_end()."','".$this->get_tour_image()."')";
		$this->query($sql);
	}
	public function check_tour_name(){
		$sql="select * from tour where tour_name = '".$this->get_tour_name()."'";
		$this->query($sql);
		if($this->num_rows()==0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function check_tour_name2($tid){
		$sql="select * from tour where tour_name = '".$this->get_tour_name()."' and id!='$tid'";
		$this->query($sql);
		if($this->num_rows()==0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function update_tour_name($tid){
		if($this->get_tour_image()==null){
			$sql="update tour set tour_name='".$this->get_tour_name()."',tour_time='".$this->get_tour_time()."',tour_price='".$this->get_tour_price()."',tour_start='".$this->get_tour_start()."',tour_begin='".$this->get_tour_begin()."',tour_end='".$this->get_tour_end()."' where id='$tid'";
		}else{
			$sql="update tour set tour_name='".$this->get_tour_name()."',tour_time='".$this->get_tour_time()."',tour_price='".$this->get_tour_price()."',tour_start='".$this->get_tour_start()."',tour_begin='".$this->get_tour_begin()."',tour_end='".$this->get_tour_end()."',tour_image='".$this->get_tour_image()."' where id='$tid'";
		}
		$this->query($sql);
	}
	public function get_tour($id){
		$sql="select * from tour where id='$id'";
		$this->query($sql);
		return $this->fetch();
	}
	public function del_tour($id){
		$sql="delete from tour where id='$id'";
		$this->query($sql);
	}
	// public function filter_gia($l,$f){
		// switch($f){
			// case 1.1:
			// $str="where tour_price>=1000000 and tour_price<=5000000 limit $l,3";
			// break;
			// case 1.2:
			// $str="where tour_price>=5000000 and tour_price<=10000000 limit $l,3";
			// break;
			// case 1.3:
			// $str="where tour_price>=10000000 and tour_price<=15000000 limit $l,3";
			// break;
			// case 2.1:
			// $str="where tour_begin='TP. Hồ Chí Minh' limit $l,3";
			// break;;
			// case 2.2:
			// $str="where tour_begin='Đà Nẵng' limit $l,3";
			// break;;
			// case 2.3:
			// $str="where tour_begin='Hà Nội' limit $l,3";
			// break;
			// case 3.1:
			// $str="where tour_end='TP. Hồ Chí Minh' limit $l,3";
			// break;;
			// case 3.2:
			// $str="where tour_end='Đà Nẵng' limit $l,3";
			// break;;
			// case 3.3:
			// $str="where tour_end='Hà Nội' limit $l,3";
			// break;
			// default:
			// $str=null;
		// }
		// $sql="select * from tour ".$str;
		// $this->query($sql);
		// if($this->num_rows()==0){
			// $data=0;
		// }else{
			// while($rows=$this->fetch()){
				// $data[]=$rows;
			// }
		// }
		// return $data;
	// }
	// public function filter_start($f){
		// $sql="select * from tour where tour-start='$f'";
		// $this->query($sql);
		// while($rows=$this->fetch()){
			// $data[]=$rows;
		// }
		// return $data;
	// }
	// public function filter_end($f){
		// $sql="select * from tour where tour-end='$f'";
		// $this->query($sql);
		// while($rows=$this->fetch()){
			// $data[]=$rows;
		// }
		// return $data;
	// }
}
?>