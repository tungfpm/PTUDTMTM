<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<form action="register.php" name="Tuoi" method="post">
<table>
	<tr>
		<td>Username : </td>
		<td><input type="text" name="txtuser" size="25" /></td>
	</tr>
	<tr>
		<td>Password :</td>
		<td><input type="password" name="txtpass" size="25" /></td>
	</tr>
	<tr>
		<td>Re-password:</td>
		<td><input type="password" name="txtpass2" size="25" /></td>
	</tr>
	<tr>
		<td>Email : </td>
		<td><input type="email" name="txtemail" size="25" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Đăng ký" /></td>
	</tr>
	
</table>
</form>
</body>
</html>

<?php
require("user.php");
require("session.php");
$u = "";
$p = "";
$e = "";
if (isset($_POST['submit'])){
	if($_POST['txtuser'] == NULL) {
		echo "Tên đăng nhập trống<br />";
	}else{
		$u=$_POST['txtuser'];
	}
	if ($_POST['txtpass'] == NULL) {
		echo "Mật khẩu trống<br />";
	} else {
		if($_POST['txtpass'] != $_POST['txtpass2']){
			echo "Mật khẩu không trùng khớp";
		} else {
			$p = ($_POST['txtpass']);
		}
	}
	if($_POST['txtemail'] == NULL) {
		echo "Email trống<br />";
	}else{
		$e=$_POST['txtemail'];
	}

	$l= 1;

	if($u != "" && $p != "" && $e != "" && $l){
		$user = new user;
			$user->set_username($u);
			$user->set_password($p);
			$user->set_email($e);
			$user->set_level($l);

			if ($user->check_username()) {
				$user->insert_user();
				echo("Đăng ký thành công<br/>");
				echo "<a href='../index.php'>Vui lòng ấn vào đây để về trang chủ</a>";
			} else {
				echo "Tên đăng nhập đã tồn tại";
			}
	}
}
?>

