<?php
	require_once("book.php");
	$id = $_GET['uid'];
	$book = new book;
	$book->del_book($id);
	header("location:list_search.php");
	exit();
/* By Tungfpm */
?>