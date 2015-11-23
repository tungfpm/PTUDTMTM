<?php
require("../includes/config.php");
require("../includes/session.php");
$id=$_GET['uid'];
if($id == 1){
	echo "<script>";
	echo "alert('Bạn không thể xóa thành viên này !!!'); window.location='list_user.php';</script>";
}else{
	$sql="delete from user where userid='$id'";
	mysql_query($sql);
	header("location:list_user.php");
	exit();
}


?>