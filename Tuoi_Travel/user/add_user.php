<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
</head>
<body>
<form action="add_user.php" name="TungfpmForm" method="post">
<table>
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
		<td></td>
		<td><input type="submit" name="submit" value="Add" /></td>
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

