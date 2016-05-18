<?php
	require_once("book.php");
	$ms = $_GET['ums'];
	$book = new book;
	$book->del_book($ms);
	header("location:list_book.php");
	exit();
/* By Tungfpm */
?>