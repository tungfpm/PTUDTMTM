<?php
	require_once("maker.php");
	$mh=$_GET['umh'];
	$maker = new maker;
	$maker->del_maker($mh);
	header("location:list_maker.php");
	exit();
?>