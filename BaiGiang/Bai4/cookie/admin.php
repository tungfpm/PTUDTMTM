<?php
	if (isset($_COOKIE['user'])) {
		echo "Welcome back, ".$_COOKIE['user'];
		echo "<a href='logout.php'>Logout</a>";
	} else {
		echo "Please login when you visit here";
	}
?>