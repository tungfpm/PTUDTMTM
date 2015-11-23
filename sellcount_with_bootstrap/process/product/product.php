<?php
	require_once("../database.php");
	class product extends database{
		public $_masp;
		public $_tensp;
		public $_anh;
		public $_gia;
		public $_soluong;
		public $_mahang;
		public $_maloai;
		public $_ttThem;

		public $_name_img;	
		
		public function __construct(){
			$this->connect();
		}

		public function set_masp($ma){
			$this->_masp = $ma;
		}
		public function get_masp(){
			return $this->_masp;
		}

		public function set_tensp($ten){
			$this->_tensp = $ten;
		}
		public function get_tensp(){
			return $this->_tensp;
		}

		public function set_anh($anh){
			$this->_anh = $anh;
		}
		public function get_anh(){
			return $this->_anh;
		}

		public function set_gia($gia){
			$this->_gia = $gia;
		}
		public function get_gia(){
			return $this->_gia;
		}

		public function set_soluong($soluong){
			$this->_soluong = $soluong ;
		}
		public function get_soluong(){
			return $this->_soluong;
		}

		public function set_mahang($mahang){
			$this->_mahang = $mahang;
		}
		public function get_mahang(){
			return $this->_mahang;
		}

		public function set_maloai($maloai){
			$this->_maloai = $maloai;
		}
		public function get_maloai(){
			return $this->_maloai;
		}

		public function set_ttThem($tt){
			$this->_ttThem = $tt;
		}
		public function get_ttThem(){
			return $this->_ttThem;
		}

		public function set_name_img($n){
			$this->_name_img = $n;
		}
		public function get_name_img(){
			return $this->_name_img;
		}

		public function list_product(){
			$sql = "select * from product";
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
		
		public function check_product_msp(){
			$sql = "select * from product where masp='".$this->get_masp()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function check_product_tensp(){
			$sql = "select * from product where tensp='".$this->get_tensp()."'";
			$this->query($sql);
			if ($this->num_rows() == 0) {
				return true;
			} else {
				return false;
			}
		}

		public function insert_product(){
			$sql = "insert into product(masp,tensp,anh,gia,soluong,mahang,maloai,ttthem)
			values('".$this->get_masp()."','".$this->get_tensp()."',
				'".$this->get_anh()."','".$this->get_gia()."',
				'".$this->get_soluong()."','".$this->get_mahang()."','".$this->get_maloai()."',
				'".$this->get_ttThem()."')";
			$this->query($sql);
		}

		public function get_productdata($msp){
			$sql = "select * from product where masp ='$msp'";
			$this -> query($sql);
			return $this -> fetch();
		}

		public function check_upload($img){
			if ($_FILES["$img"]["error"] > 0){
				// echo "Return Code: " . $_FILES["$img"]["error"] . "<br />";
				return false;
			} else if ($_FILES["$img"]["name"] == NULL) {
				return false;
			} else {
				return true;
			}
		}

		public function upload_image($img){
			$name = time().$_FILES["$img"]["name"];
			move_uploaded_file($_FILES["$img"]["tmp_name"],"data_img/" .$name);	
			// echo $this->get_name_img($name_img);
			$link = "data_img/" .$name;
			
			return $name;
		}

		public function upload_new(){
			move_uploaded_file($_FILES["img"]["tmp_name"],"data_img/" .$this->get_anh());			
		}

		public function update_product($masp){
			$sql="update product set tensp='".$this->get_tensp()."', 
			gia='".$this->get_gia()."',
			mahang='".$this->get_mahang()."', maloai ='".$this->get_maloai()."' , 
			soluong='".$this->get_soluong()."',ttthem='".$this->get_ttThem()."'
			where masp = '$masp'";						
			$this->query($sql);
		}


		public function del_product($masp){
			$sql="delete from product where masp='$masp'";
			$this->query($sql);
		}

		public function show_sp($masp) {
			$sql ="select * from product where masp='$masp'";
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

		public function timkiem($mahang,$maloai){
			if($mahang!=""){
				if($maloai!="")
				{
					$sql="select * from product where mahang='$mahang' and maloai = '$maloai'";
					$this->query($sql);
					if ($this->num_rows() == 0) {
					$data = 0;
					} else {
						while ($row = $this->fetch()) {
						$data[] = $row;
						}
					}			
		
				}else{
					$sql="select * from product where mahang='$mahang'" ;
					$this->query($sql);
					if ($this->num_rows() == 0) {
					$data = 0;
					} else {
						while ($row = $this->fetch()) {
						$data[] = $row;
						}
					}			
					
				}
			}else if($maloai  !="" ){
					$sql="select * from product where maloai = '$maloai'";
					$this->query($sql);
					if ($this->num_rows() == 0) {
					$data = 0;
					} else {
						while ($row = $this->fetch()) {
						$data[] = $row;
						}
					}			
		
				} else{
					$data= 0;
				}
				
			return $data;	
		}

		
	}	

?>