<?php
require("user.php");
$id=$_GET['uid'];
if($id == 1){
	echo "<script>";
	echo "alert('Bạn không thể xóa thành viên này !!!'); window.location='list_user.php';</script>";
}else{
	$user = new user;
	$user->del_user($id);
	header("location:list_user.php");
	exit();
}
?>