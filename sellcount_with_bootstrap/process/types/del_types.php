<?php
	require("types.php");
	$ml=$_GET['uml'];
	$types = new types;
	$types->del_types($ml);
	header("location:list_types.php");
	exit();
?>