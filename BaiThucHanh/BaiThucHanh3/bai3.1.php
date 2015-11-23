<!DOCTYPE html>
<html>
<head>
	<title>Bài 3.1</title>
	<style type="text/css">
	#welcome{
		font-family: Tahoma;
		color: red;
	}
	</style>
</head>
<body>
<form action="bai3.1.php" name="TungfpmForm" method="POST">
	<label>Username : </label><input type="text" name="fuser"><br>
	<label>Password : </label><input type="password" name="fpass"><br>
	<input type="submit" name="submit" value="Login">
</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$user = $_POST['fuser'];
		$pass = $_POST['fpass'];
		if ($user == "admin" && $pass = "12345") {
			echo '<label id="welcome">Chào mừng bạn, admin</label>';
		} else {
			echo "Sai thông tin đăng nhập";
		}
	}
?>