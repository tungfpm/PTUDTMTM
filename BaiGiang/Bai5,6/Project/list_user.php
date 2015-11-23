<?php
require("/includes/config.php");
require("/includes/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>List user</title>

<script>
function kiemtra(){
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
		<td>Del</td>
	</tr>
	<?php
		echo "<a href='add_user.php'>Add Member</a>";
		$sql = "select * from user order by id DESC";
		$query = mysql_query($sql);
		if(mysql_num_rows($query) == 0){
			echo "<tr>";
			echo "<td colspan='5'>Empty Data</td>";
			echo "</tr>";
		}else{
			$stt=0;
			while($data = mysql_fetch_assoc($query)){
				$stt++;
				echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$data[username]</td>";
				if($data['level'] == 1){
					echo "<td>Member</td>";
				}else{
					echo "<td><font color='red'>Administrator</font></td>";
				}
				echo "<td><a href='edit_user.php?uid=$data[id]'>Edit</a></td>";
				echo "<td><a href='del_user.php?uid=$data[id]' onclick='return kiemtra()'>Del</a></td></tr>";
			}
		}
	?>
</table>
</body>
</html>


	

