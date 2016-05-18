<?php 
	require_once("student.php");
	$msv = $_GET['uid'];
	$sv = new student;
	$sv->del($msv);
	header("location:list.php");

?>