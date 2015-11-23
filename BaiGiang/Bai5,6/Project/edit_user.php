<?php
require("/includes/config.php");
require("/includes/session.php");

$id=$_GET['uid'];

if(isset($_POST['submit'])){
	if($_POST['txtuser'] == NULL){
		echo "Username not be empty<br />";
	} else {
		$u=$_POST['txtuser'];
	}

	if($_POST['txtpass'] != $_POST['txtpass2']){
		echo "Passwords do not match<br />";
		} else {
			if($_POST['txtpass'] != NULL){
				$p = ($_POST['txtpass']);
			} else {
				$p = "none";
			}
	}

	$l=$_POST['level'];

	if($u && $p && $l){
		$sql="select * from user where username='$u' and id != '$id'";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) == 1){
			echo "Username existed";
		} else {
			if($p != "none"){
				$sql="update user set username='$u', password='$p', level='$l' where id='$id'";
			} else {
				$sql="update user set username='$u', level='$l' where id='$id'";
			}
			mysql_query($sql);
			header("location:list_user.php");
			exit();
		}
	}
}

	$sql = "select * from user where id='$id'";

	$query = mysql_query($sql);

	$data = mysql_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
<form action="edit_user.php?uid=<?php echo $data['id'];?>" name="TungfpmForm" method="post">
<table>
	<tr>
		<td>Level :</td>
		<td>
			<select name="level">
				<option value="1" <?php if($data['level'] == 1) echo "selected"; ?>>Member</option>
				<option value="2" <?php if($data['level'] == 2) echo "selected"; ?>>Administrator</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Username : </td>
		<td><input type="text" name="txtuser" size="25" value="<?php echo $data['username']; ?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="txtpass" size="25" /></td>
	</tr>
	<tr>
		<td>Re-password</td>
		<td><input type="password" name="txtpass2" size="25" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Edit" /></td>
	</tr>
</table>
</form>
</body>
</html>

