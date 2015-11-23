<?php
	require("user.php");
	session_start();
	if ($_SESSION['ses_level'] != 1) {
		header("location:login.php");
		exit();
	}
	echo "<center>";
	echo "Hello " .$_SESSION['ses_username'];
	echo "<a href='add_user.php'>Add Member</a>";
	echo "</center>";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage by Admin</title>
<script>
	function xacnhan(){
		if(!window.confirm("Do you want to delete this user ?")){
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
	<table width='400' align='center'>
	<tr>
		<td>STT</td>
		<td>Username</td>
		<td>Level</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php
		
		$stt=0;
		$user = new user;
		$data = $user->list_user();
		
		foreach ($data as $item) {
			$stt++;
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[username]</td>";
			if($item['level'] == 2){
				echo "<td>Member</td>";
			}else{
				echo "<td><font color='red'>Administrator</font></td>";
			}
			echo "<td><a href='edit_user.php?uid=$item[id]'>Edit</a></td>";
			echo "<td><a href='del_user.php?uid=$item[id]' onclick='return xacnhan()'>Del</a></td></tr>";
		}
	?>
</table>
</body>
</html>