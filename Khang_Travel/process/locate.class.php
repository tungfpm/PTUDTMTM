<?php 
	require_once 'process/database.class.php';
	/**
	* 
	*/
	class locate extends database{
		private $locateName;
		private $locateDescription;

		function __construct()
		{
			$this->connect_dbc();
		}
		function set_locateName($locateName){
			$this->locateName=$locateName;
		}
		function get_locateName(){
			return $this->locateName;
		}
		function set_locateDescription($locateDescription){
			$this->locateDescription=$locateDescription;
		}
		function get_locateDescription(){
			return $this->locateDescription;
		}
		function show_Locate(){
			$sql="SELECT * FROM locates";
			echo $sql;
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
		function add_Locate($user_id){
			$sql="INSERT INTO locates(user_id, locate_name, locate_description) VALUES ('".$user_id."','".$this->get_locateName()."','";
			$sql.=$this->get_locateDescription()."')";	
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