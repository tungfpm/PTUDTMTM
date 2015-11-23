<?php
	require("config.php");

	$msp = $_GET['masp'];
	$sql = "delete from ttsp where msp='$msp'";
	mysql_query($sql);
	header("location:list.php");
?>