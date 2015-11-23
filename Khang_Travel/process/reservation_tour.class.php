<?php 
	require_once 'tour.class.php'; 
	
	class reservation_tour extends tour{
		private $reservation_tour_amount='';
		private $reservation_tour_description='';

		function __construct()
		{
			$this->connect_dbc();
		}
		function set_amount($amout){
			$this->reservation_tour_amount=$amout;
		}
		function get_amount(){
			return $this->reservation_tour_amount;
		}
		function set_description($description){
			$this->reservation_tour_description=$description;
		}
		function get_description(){
			return $this->reservation_tour_description;
		}
		function reservation_tour($user_id, $tour_id){
			$sql="INSERT INTO reservation_tour ( user_id, tour_id, reservation_tour_amount, reservation_tour_description)";
			$sql.=" VALUES ('".$user_id."','".$tour_id."','".$this->get_amount()."','".$this->get_description()."')";
			//echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
	}
 ?>