<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="login.php" name="TungfpmForm" method="post">
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
				$_SESSION['ses_level'] = $data['level'];
				header("location:index.php");
				exit();
			}
		}
	}
?>