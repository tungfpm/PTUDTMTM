<?php 
	require_once'database.class.php';
	class user extends database{
		private $userEmail;
		private $userName;
		private $userPassword;
		private $userPhone;
		private $userAddress;
		private $userBirthday;
		private $userSex;
		private $userLevel;
		function __construct()
		{	
			$this->connect_dbc();
		}

		function setEmail($email){
			$this->userEmail=$email;
		}
		function getEmail(){
			return $this->userEmail;
		}

		function setName($name){
			$this->userName=$name;
		}
		function getName(){
			return $this->userName;
		}

		function setPassword($pass){
			$this->userPassword=$pass;
		}
		function getPassword(){
			return $this->userPassword;
		}
		function setPhone($phone){
			$this->userPhone=$phone;
		}
		function getPhone(){
			return $this->userPhone;
		}

		function setAddress($address){
			$this->userAddress=$address;
		}
		function getAddress(){
			return $this->userAddress;
		}

		function setBirthday($birth){
			$this->userBirthday=$birth;
		}
		function getBirthday(){
			return $this->userBirthday;
		}
		function setSex($sex){
			$this->userSex=$sex;
		}
		function getSex(){
			return $this->userSex;
		}
		function setLevel($level){
			$this->userLevel=$level;
		}
		function getLevel(){
			return $this->userLevel;
		}

		// Thêm tài khoản
		function add_User(){
			$sql="INSERT INTO "."users(user_email, user_name, password, phone, address, birthday, sex)"." VALUES ('";
			$sql.=$this->userEmail."','".$this->userName."','".$this->userPassword."',".$this->userPhone.",'";
			$sql.=$this->userAddress."','".$this->userBirthday."','".$this->userSex."')";
			//echo $sql;
			$this->query($sql);
		}
		function edit_User($id){
			$sql="UPDATE users SET "." user_name ='".$this->getName()."', phone='".$this->getPhone()."', address='";
			$sql.=$this->getAddress()."', birthday='".$this->getBirthday()."', sex='".$this->getSex()."',user_level='";
			$sql.=$this->getLevel()."' WHERE user_id='".$id."'";
			//echo $sql."</br>";
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
		function check_Edit($id){
			$sql="SELECT * FROM users WHERE user_name='".$this->getName()."' "."AND user_id != '".$id."'"; 
			//echo $sql;
			$this->query($sql);
			if ($this->numRows()==0) {
				return false;
			}else{
				return true;
			}
		}

		function check_Exist(){
			$sql="SELECT * FROM users WHERE user_email= '".$this->getEmail()."'";
			$this->query($sql);
			if ($this->numRows()==0) {
				return false;
			}else{
				return true;
			}
		}

		function check_Login(){
			$sql="SELECT user_id, user_email, user_name, user_level FROM users WHERE user_email='";
			$sql.=$this->getEmail()."'"."AND password= '".$this->getPassword()."'";
			$this->query($sql);
			if ($this->numRows()==0) {
				return false;
			}else{
				return $this->fetch();
			}
		}
		function log_Out(){
	        session_start();
	        session_destroy();
	        header("location:index.php");
	        exit();
    	}
    	function show_User(){
    		$sql="SELECT * FROM users";
    		// echo $sql;
    		$this->query($sql);
    		if ($this->numRows()==0) {
    			$data=0;
    		}else{
    			while($row=$this->getArray()){
					$data[]=$row;	
				}
    		}
    		return $data;
    	}
    	function check_Admin(){
    		if ($_SESSION['user_level']!=2) {
    			header("Location:index.php");
    		}
    	}

	}
 ?>