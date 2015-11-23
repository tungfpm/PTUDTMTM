<?php
	require("user.php");
	require("session.php");
	echo "<center>Hello <font color='green' size='14'><b>";
	if ($_SESSION['ses_username'] == "hongtuoi") {
		$name = "Hồng Tươi";
	} else {
		$name = $_SESSION['ses_username'];
	}
	echo $name;
	echo "</b></font><a href='logout.php'> - Logout</a></center>";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>List_user</title>
<script>
	function xacnhan(){
		if(!window.confirm("Bạn có muốn xóa thành viên này ?")){
			return false;
		}
	}
</script>
<style type="text/css">
	a{
		text-decoration: none;
	}
</style>
</head>
<body>
	<table width='600' align='center'>
	<tr>
		<td colspan="6"><center><a href='add_user.php'>Add Member</a></center></td>
	</tr>
	<tr>
		<td>STT</td>
		<td>Username</td>
		<td>Email</td>
		<td>Level</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php
		echo "";
		$stt=0;
		$user = new user;
		$data = $user->list_user();
		
		foreach ($data as $item) {
			$stt++;
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[username]</td>";
			echo "<td>$item[email]</td>";
			if($item['level'] == 1){
				echo "<td>Member</td>";
			}else{
				echo "<td><font color='red'>Administrator</font></td>";
			}
			echo "<td><a href='edit_user.php?uid=$item[id]'>Sửa</a></td>";
			echo "<td><a href='del_user.php?uid=$item[id]' onclick='return xacnhan()'>Xóa</a></td></tr>";
		}
	?>
</table>
</body>
</html>