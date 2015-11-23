<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
	<meta charset=utf-8>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css"  href="form.css">
</head>
<style type="text/css">
	body{
    background-color: pink;
	}
</style>
<body>
<form  action="add_user.php" name="Tuoi" method="post">
<h2>Thêm thành viên</h2>
<table align="center">
	<tr>
		<td>Level : </td>
		<td>
			<select name="level">				
				<option value="1">Member</option>
				<option value="2">Administrator</option>				
			</select>
		</td>
	</tr>	
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
		<td>Email :</td>
		<td><input type="email" name="txtemail" size="25" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<!-- <button type='button' class='btn btn-default btn-md' name="submit">Add</button> -->
			<input type="submit" name="submit" value="Add" />
			<a href="menu.php"><button type='button' class='btn btn-default btn-md' value="huy">Hủy</button></a>
		</td>
	</tr>
	
</table>
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

	$l=$_POST['level'];

	if($u != "" && $p != "" && $e != "" && $l){
		$user = new user;
			$user->set_username($u);
			$user->set_password($p);
			$user->set_email($e);
			$user->set_level($l);

			if ($user->check_username()) {
				$user->insert_user();
				header("location:list_user.php");
				exit();
			} else {
				echo "Tên đăng nhập đã tồn tại";
			}
	}
}
?>
</center>
</form>
</body>
</html>



