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
		require("/includes/config.php");
		$sql = "select * from user where username = '$u' and password = '$p'";
		$query = mysql_query($sql);
		if (mysql_num_rows($query) == 0) {
			echo "Username or password is wrong. Retype";
		} else {
			$data = mysql_fetch_assoc($query);
			$_SESSION['ses_username'] = $data['username'];
			$_SESSION['ses_level'] = $data['level'];
			$_SESSION['ses_id'] = $data['id'];
			header("location:index.php");
			exit();
		}
	}
}
?>

