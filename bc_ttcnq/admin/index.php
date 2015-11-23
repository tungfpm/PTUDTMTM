<?php
include '../config.php';
include 'check-login.php';
if(isset($_SESSION["success"])){
	if(isset($_REQUEST['controller']))
	{
		$controller = $_REQUEST['controller'];
		$task = $_REQUEST['task'];
	}
	else
	{
		$controller = "sanpham";
		$task = "xemnhomsanpham";
	}
	$controllerName = "controller".$controller;
	require_once "controller/".$controllerName.".php";
	$thucthi = New $controllerName();
	
	$thucthi -> $task();
}
else
	include "login.php";