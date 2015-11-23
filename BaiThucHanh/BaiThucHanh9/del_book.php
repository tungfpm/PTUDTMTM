<?php
require("book.php");
$ms=$_GET['fmasach'];

	$book = new book;
	$book->del_book($ms);
	header("location:list_book.php");
	exit();
?>