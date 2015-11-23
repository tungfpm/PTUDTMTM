<?php
define('BASE_URL', 'http://localhost/travel/');
function redirect_to($page = 'index.php') {
	$url = BASE_URL . $page;
	header("Location: $url");
	exit();
}
?>