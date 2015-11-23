<?php
	require("database.php");
	class user extends database{
		public $_username;
		public $_password;
		public $_email;
		public $_level;

		public function __construct(){
			$this->connect();
		}
		public function set_username($user){
			$this->_username = $user;
		}
		public function get_username(){
			return $this->_username;
		}
		public function set_password($pass){
			$this->_password = $pass;
		}
		public function get_password(){
			return $this->_password;
		}
		public function set_email($email){
			$this->_email = $email;
		}
		public function get_email(){
			return $this->_email;
		}
		public function set_level($l){
			$this->_level = $l;
		}
		public function get_level(){
			return $this->_level;
		}

		public function check_login(){
			$sql = "select * from user where username='".$this->get_username()."'
			and password='".$this->get_password()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return false;
			} else {
				return $this->fetch();
			}
		}

		public function list_user(){
			$sql = "select * from user order by id desc";
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

		public function insert_user(){
			$sql = "insert into user(username,email,password,level) values('".$this->get_username()."','".$this->get_email()."',
				'".$this->get_password()."','".$this->get_level()."')";
			$this->query($sql);
		}

		public function check_username(){
			$sql = "select * from user where username='".$this->get_username()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function edit_user($id){
			$sql="select * from user where username='".$this->get_username()."' and id != '$id'";
			$this->query($sql);
			if($this->num_rows() == 1){
				echo "Tên truy cập này đã tồn tại, vui lòng nhập lại tên khác";
			}else{
				if($this->get_password() != ""){
					$sql="update user set username='".$this->get_username()."', password='".$this->get_password()."', email='".$this->get_email()."', level='".$this->get_level()."' where id='$id'";
				}else{
					$sql="update user set username='".$this->get_username()."', email='".$this->get_email()."', level='".$this->get_level()."' where id='$id'";
				}
				$this->query($sql);		
			}	
		}
		public function get_user($id){
		$sql="select * from user where id='$id'";
		$this->query($sql);
		return $this->fetch();
	}

		public function del_user($id){
			$sql="delete from user where id='$id'";
			$this->query($sql);
		}
	}
?>