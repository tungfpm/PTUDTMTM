<?php
	setcookie("user","admin",time()-10);
	header('location:login.php');
	exit();
?>