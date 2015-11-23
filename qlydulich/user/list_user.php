<?php
	require("user.php");
	require("session.php");
	echo "<center></b></font><a href='menu.php'>
	<button type='button' class='btn btn-primary btn-sm'>Back</button>
	</a> - <a href='../index.php'>
	<button type='button' class='btn btn-primary btn-sm'>Home</button>
	</a> - Hello <font color='green' size='14'><b>";
	if ($_SESSION['ses_username'] == "Tuoi") {
		$name = "Hồng Tươi";
	} else {
		$name = $_SESSION['ses_username'];
	}
	echo $name;
	echo "</b></font> - <a href='logout.php'>
	<button type='button' class='btn btn-primary btn-sm'>Logout</button>
	</a></center>";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>List User</title>	
    <meta charset=UTF-8>	
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
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
	body{
    background-color: pink ;
	}
	.table {
		width: 1000px;
	}
</style>
</head>
<body>
	<table align='center' class="table table-hover table-bordered">
	<tr>
		<td colspan="6"><center><a href='add_user.php'>Add Member</a></center></td>
	</tr>
	<tr>
		<td>STT</td>
		<td>Username</td>
		<td>Email</td>
		<!-- <td>Giới tính</td>-->
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
			echo "<td><a href='edit_user.php?uid=$item[id]'>
			<button type='button' class='btn btn-warning btn-sm'>Sửa</button>
			</a></td>";
			echo "<td><a href='del_user.php?uid=$item[id]' onclick='return xacnhan()'>
			<button type='button' class='btn btn-danger btn-sm'>Xoá</button>
			</a></td></tr>";
		}
	?>
</table>
</body>
</html>