<?php 
require_once 'database.class.php';
	class image extends database
	{
		public $imageName;
		private $imageSize;
		private $imageExtention;
		private $imageTmp;
		private $errors;
		private $imageFolder;
		function __construct($image)
		{
			
			$imageInfo=$_FILES[$image];
			$this->imageName=$imageInfo['name'];
			$this->imageSize=$imageInfo['size'];
			$this->imageTmp=$imageInfo['tmp_name'];
			$this->imageExtention=$this->get_Extention();

		}
		function get_Extention(){
			$ext=pathinfo($this->imageName,PATHINFO_EXTENSION);
		 	return $ext;
		}
		public function setImageExtention($arrayExtention){ 
			if(in_array(strtolower($this->imageExtention),$arrayExtention )==false){
				$this->errors[]='error extention';
			}
		}
		public function setImageSize($min, $max){
			if ($this->imageSize<$min||$this->imageSize>$max) {
				$this->errors[]='imageSize error';
			}
		}
		public function setImageFolder($value){
			if(file_exists($value)){
				$this->imageFolder=$value;
			}else{
				$this->errors[]='file Folder error';
			}
		}
		function getImageFolder(){
			return $this->imageFolder;
		}
		public function upload(){
			if(count($this->errors)>0){
			//echo "khong thoa man";
			//echo print_r($this->errors);
			}else{
				move_uploaded_file($this->imageTmp, $this->imageFolder.$this->imageName);
			}
		}
		public function add($data){
			$this->connect_dbc();
			$field_list='';
			$value_list='';
			foreach ($data as $key => $value) {
				$field_list.=",$key";
				$value_list.=",'".$value."'";
			}
			$sql = "INSERT INTO "." images ". "(".trim($field_list, ',').") VALUES (".trim($value_list, ',').")";
			$this->query($sql);
			echo $sql;
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}
		function delete_Image($user_id){
			$sql="DELETE FROM images user_id='".$user_id."'";
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