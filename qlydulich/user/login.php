<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css"  href="login.css">
</head>
<body>
<form action="login.php" name="Tuoi" method="post">
	<meta charset=utf-8>
    <h2>Đăng nhập</h2>
	Username: <input type="text" name="txtuser" size="25" /><br />
	Password: <input type="password" name="txtpass" size="25" /><br />
<input type="submit" name="submit" value="Login" />
</form>
</body>
</html>
<?php
	session_start();
	require("user.php");
	if(isset($_POST['submit'])){
		if($_POST['txtuser'] == NULL){
			echo "Username not be empty<br/>";
		}else{
			$u = $_POST['txtuser'];
		}
		if($_POST['txtpass'] == NULL){
			echo "Password not be empty<br/>";
		}else{
			$p = ($_POST['txtpass']);
		}
		if($u && $p) {
			$user = new user;
			$user->set_username($u);
			$user->set_password($p);
			$data = $user->check_login();
			if ($data == false) {
				echo "Login Faild";
			} else {
				$_SESSION['ses_username'] = $data['username'];
				$_SESSION['ses_email'] = $data['email'];
				$_SESSION['ses_level'] = $data['level'];
				if ($_SESSION['ses_level'] != 2) {
					header("location:../index.php");
					exit();
				} elseif ($_SESSION['ses_level'] == 2) {
					header("location:menu.php");
					exit();
				}
			}
		}
	}
?>