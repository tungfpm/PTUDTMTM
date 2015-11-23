<?php 
	require_once 'database.class.php';
	class tour extends database{
		private $tourName;
		private $tourPrice;
		private $tourAmount;
		private $tourDescription;
		function __construct()
		{
			$this->connect_dbc();
		}
		function set_tourName($tourName){
			$this->tourName=$tourName;
		}
		function get_tourName(){
			return $this->tourName;
		}
		function set_tourPrice($tourPrice){
			$this->tourPrice=$tourPrice;
		}
		function get_tourPrice(){
			return $this->tourPrice;
		}
		function set_tourAmount($tourAmount){
			$this->tourAmount=$tourAmount;
		}
		function get_tourAmount(){
			return $this->tourAmount;
		}
		function set_Description($tourDescription){
			$this->tourDescription=$tourDescription;
		}
		function get_Description(){
			return $this->tourDescription;
		}

		function add_Tour($user_id,$locate_id, $cat_id){
			$sql="INSERT INTO "."tours(user_id, locate_id, cat_id, tour_name, tour_price, tour_amount, tour_description)";
			$sql.=" VALUES ('".$user_id."','".$locate_id."','".$cat_id."','".$this->get_tourName()."','".$this->get_tourPrice()."','";
			$sql.=$this->get_tourAmount()."','".$this->get_Description()."')";
			//echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
		function edit_Tour($user_id,$locate_id, $cat_id,$tour_id){
			$sql="UPDATE tours SET "." user_id='".$user_id."', locate_id='".$locate_id."', cat_id='".$cat_id."',";
			$sql.="tour_name='".$this->get_tourName()."', tour_price='".$this->get_tourPrice()."',";
			$sql.="tour_amount='".$this->get_tourAmount()."', tour_description='".$this->get_Description()."'";
			$sql.=" WHERE tour_id='".$tour_id."'";
			//echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
		function delete_Tour($tour_id){
			$sql="DELETE FROM tours WHERE tour_id='".$tour_id."'";
			//echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
		function delete_Image($tour_id){
			$sql="DELETE FROM images WHERE tour_id='".$tour_id."'";
			//echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
		function show_Tour(){
			$sql="SELECT "." u.user_name, l.locate_name, t.tour_id, t.tour_name, t.tour_price, c.cat_name, ";
			$sql.="t.tour_amount, t.tour_description FROM tours AS t JOIN users AS u USING(user_id)"; 
			$sql.=" JOIN locates AS l USING(locate_id) JOIN categories AS c USING(cat_id)  ORDER BY tour_id ASC  ";
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				$data=0;
			}else{
				while ($row1=$this->getArray()) {
					$data[]=$row1;
				}
			}
			return $data;
		}
		function show_Tour1(){
			$sql="SELECT "." u.user_name, l.locate_name, t.tour_id, t.tour_name, t.tour_price, c.cat_name, ";
			$sql.="t.tour_amount, t.tour_description, i.image_name FROM tours AS t JOIN users AS u USING(user_id)"; 
			$sql.=" JOIN locates AS l USING(locate_id) JOIN categories AS c USING(cat_id) JOIN images AS i USING(tour_id) ORDER BY tour_id ASC LIMIT 3 ";
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				$data=0;
			}else{
				while ($row1=$this->getArray()) {
					$data[]=$row1;
				}
			}
			return $data;
		}
		function show_Table_Tour($tour_id){
			$sql="SELECT * FROM tours WHERE tour_id='".$tour_id."'";
			echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				$data=0;
			}else{
				while ($row1=$this->getArray()) {
					$data[]=$row1;
				}
			}
			return $data;
		}
		function show_Tour_Mini(){
			$sql="SELECT * FROM tours";
			echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				$data=0;
			}else{
				while ($row1=$this->getArray()) {
					$data[]=$row1;
				}
			}
			return $data;
		}

		function show_Reservation_Tour($tour_id){
			$sql="SELECT ". " t.tour_name, t.tour_price, t.tour_description, t.tour_amount, l.locate_name, i.image_name ";
			$sql.="FROM locates AS l INNER JOIN tours AS t USING(locate_id) INNER JOIN images AS i  USING(tour_id) WHERE ";
			$sql.="tour_id='".$tour_id."' LIMIT 1";
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				$data=0;
			}else{
				while ($row1=$this->getArray()) {
					$data[]=$row1;
				}
			}
			return $data;
		}
		function check_Exist(){
			$sql="SELECT * FROM tours WHERE tour_name= '".$this->get_tourName()."'";
			$this->query($sql);
			if ($this->numRows()==0) {
				return false;
			}else{
				return true;
			}
		}
		function check_Edit($tour_id){
			$sql="SELECT * FROM tours WHERE tour_name= '".$this->get_tourName()."' AND tour_id!='".$tour_id."'";
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				return false;
			}else{
				return true;
			}
		}
		function Search_Tour(){

		}
	}
 ?>