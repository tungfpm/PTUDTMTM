<!DOCTYPE html>
<html>
<head>

	<title>Register</title>
    <meta charset=UTF-8>
    <link rel="stylesheet" type="text/css" href="register.css"/>
    <style type="text/css">
    	form input[type="submit"] {
    padding: 9px;
    width: 100px;
}
    </style>
</head>
<body>
<form action="register.php" name="Tuoi" method="post">
<table>
    <h2>Đăng kí thành viên</h2>
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
	<!--<tr>
		<td>giới tính :</td>
		<td><input type="radio" name="gt" value ="1"/>nam
			<input type="radio" name="gt" value ="2"/>nữ
		</td>
	</tr>-->
	<tr>
		
		<td colspan="2"><input type="submit" name="submit" value="Đăng ký" /></td>
	</tr>
	<tr>
		<td colspan="2">
				<center>
		<?php
require("user.php");
require("session.php");
$u = "";
$p = "";
$e = "";
if (isset($_POST['submit'])){
	if($_POST['txtuser'] == NULL) {
		echo "Vui lòng nhập tên đăng nhập<br />";
	}else{
		$u=$_POST['txtuser'];
	}
	if ($_POST['txtpass'] == NULL) {
		echo "Vui lòng nhập mật khẩu<br />";
	} else {
		if($_POST['txtpass'] != $_POST['txtpass2']){
			echo "Mật khẩu không trùng khớp";
		} else {
			$p = ($_POST['txtpass']);
		}
	}
	if($_POST['txtemail'] == NULL) {
		echo "Vui lòng nhập email<br />";
	}else{
		$e=$_POST['txtemail'];
	}

	if($u != "" && $p != "" && $e != ""){
		$user = new user;
			$user->set_username($u);
			$user->set_password($p);
			$user->set_email($e);
			$user->set_level($l);

			if ($user->check_username()) {
				$user->insert_user();
				header("location:../index.php");
				exit();
			} else {
				echo "Tên đăng nhập đã tồn tại";
			}
	}
}
?>
	</center>
		</td>
	</tr>
</table>
</form>
</body>
</html>


