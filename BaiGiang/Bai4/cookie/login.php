<!DOCTYPE html>
<html>
<head>
	<title>Login Cookie</title>
</head>
<body>
<form action="login.php" name="Tungfpm" method="POST">
	<label>Username : </label><input type="text" name="fuser"><br>
	<label>Password : </label><input type="password" name="fpass"><br>
	<input type="submit" name="submit" value="Login">
</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		if ($_POST['fuser'] == NULL) {
			echo "Please enter your username<br>";
		} else {
			$user = $_POST['fuser'];
		}
		if ($_POST['fpass'] == "") {
			echo "Please enter your password<br>";
		} else {
			$pass = $_POST['fpass'];
		}
		if ($user && $pass) {
			if ($user == "admin" && $pass == "12345") {
				setcookie("user","admin", time()+3600);
				header("location:admin.php");
				exit();
			} else {
				echo "Wrong username or password";
			}
		}
	}
?>