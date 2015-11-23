<?php
	$title = "List User";
	$sicon = "users_two_48";
	require ("../partials/top.php");
	require ("user.php");
	echo "<center><font color='blue' >Hello Sir,</font>
	<font color='green' size='30'><b>";
	if ($_SESSION['ses_username'] == "tungfpm") {
		$name = "Phạm Mạnh Tùng";
	} else {
		$name = $_SESSION['ses_username'];
	}
	echo $name."</b></font>";
?>
<div class="container">
	<table class="table table-hover table-bordered" >
	<tr class="info">
		<td colspan="6">
			<center>
				<a href="add_user.php"><button type="button" class="btn btn-lg btn-primary">Add User</button></a>
			</center>
		</td>
	</tr>
	<tr class="danger">
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
</div>
<?php
	require ("../partials/bottom.php");
?>