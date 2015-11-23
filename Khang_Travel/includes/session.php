<?php
define('BASE_URL', 'http://localhost/index/');
session_start();
if ($_SESSION['user_level'] != 2) {
	// header("location:login.php");
	exit();
}

?>