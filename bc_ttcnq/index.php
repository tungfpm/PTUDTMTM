<?php 

include "config.php";

if (isset($_REQUEST['controller']))

{

	$controller = $_REQUEST['controller'];

	$task = $_REQUEST['task'];

}

else

{

	$controller = "sanpham";

	$task = "xemsanpham";

}

require_once 'controller/controller'.$controller.'.php';

$controllerName = 'controller'.$controller;

$thucthi = New $controllerName();
$thucthi ->$task();
?>
