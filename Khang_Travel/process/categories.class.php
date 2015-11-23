<?php 
	require_once 'database.class.php';
	class categories extends database
	{
		private $catName;
		private $catDescription;
		
		function __construct()
		{
			$this->connect_dbc();
		}

		function set_CatName($cat_name){
			$this->catName=$cat_name;
		}
		function get_CatName(){
			return $this->catName;
		}
		function set_CatDescription($cat_description){
			$this->catDescription=$cat_description;
		}
		function get_CatDescription(){
			return $this->catDescription;
		}

		function add_Categories($user_id){
			$sql="INSERT INTO categories( user_id, cat_name, cat_description) VALUES ('".$user_id."','";
			$sql.=$this->get_CatName()."','".$this->get_CatDescription()."')";
			//echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}

		function show_Categories(){
			$sql="SELECT "." u.user_name, c.cat_id, c.cat_name, c.cat_description FROM users AS u ";
			$sql.="JOIN categories AS c USING(user_id)";
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				$data=0;
			}else{
				while ($row=$this->getArray()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		function edit_Categories($cat_id, $user_id){
			$sql="UPDATE categories SET user_id='".$user_id."', cat_name='".$this->get_CatName()."', cat_description='";
			$sql.=$this->get_CatDescription()."' WHERE cat_id='".$cat_id."'";
			//echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
		function check_Edit($cat_id){
			$sql="SELECT * FROM categories WHERE cat_name='".$this->get_CatName()."' "."AND cat_id != '".$cat_id."'"; 
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				return false;
			}else{
				return true;
			}
		}
		
		function check_Exist(){
			$sql="SELECT * FROM categories WHERE cat_name='".$this->get_CatName()."'";
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				return false;
			}else{
				return true;
			}
		}
		function delete_Cat($cat_id){
			$sql="DELETE FROM categories WHERE cat_id='".$cat_id."'";
			echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
	}
 ?>