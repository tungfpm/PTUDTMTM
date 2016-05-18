<?php
require("hoadon.php");
$mhd=$_GET['uid'];

	$hd = new hoadon;
	$hd->del($mhd);
	header("location:hienthi.php");
	exit();
/* By Tungfpm */
?>