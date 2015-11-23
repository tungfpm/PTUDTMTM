<?php
	require_once("product.php");
	$msp=$_GET['umsp'];
	$product = new product;
	$product->del_product($msp);
	header("location:list_product.php");
	exit();
?>