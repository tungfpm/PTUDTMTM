<?php
require("user.php");

$id=$_GET['uid'];

$u = "";
$p = "";
$e = "";
if (isset($_POST['submit'])){
	if($_POST['txtuser'] == NULL) {
		echo "Vui lòng nhập tên đăng nhập<br />";
	} else {
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

		$user->edit_user($id);
		header("location:list_user.php");
		exit();
	}
}
$user = new user;
$data= $user->get_user($id);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit user</title>
	<meta charset=utf-8>
	<link href="form.css" type= "text/css" rel= "stylesheet" />
</head>
<body>
<form action="" name="Tuoi" method="post">
<table>
	<tr>
		<td>Level : </td>
		<td>
			<select name="level">				
				<option value="1" <?php if($data['level']==1) echo "selected";?>>Member</option>
				<option value="2" <?php if($data['level']==2) echo "selected";?>>Administrator</option>				
			</select>
		</td>
	</tr>	
	<tr>
		<td>Username : </td>
		<td><input type="text" name="txtuser" value="<?php echo $data['username'] ?>" size="25"  /></td>
	</tr>
	<tr>
		<td>Password :</td>
		<td><input type="password" name="txtpass" value="<?php echo $data['password'] ?>" size="25" /></td>
	</tr>
	<tr>
		<td>Re-password:</td>
		<td><input type="password" name="txtpass2" value="<?php echo $data['password'] ?>" size="25" /></td>
	</tr>
	<tr>
	<!--<td>Giới tính: </td>
	<td>	
		<input type="radio" name="gt" size="25" value="1" <?php if ($data['gioitinh']==1) echo "checked"; ?>/><span>Nam</span>
		<input type="radio" name="gt" size="25" value="2" <?php if ($data['gioitinh']==2) echo "checked"; ?>/><span>Nữ</span>
	</td>-->
	</tr>
	<tr>
		<td>Email :</td>
		<td><input type="email" name="txtemail" value="<?php echo $data['email'] ?>" size="25" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Edit" /></td>
	</tr>
</table>
</form>
</body>
</html>

