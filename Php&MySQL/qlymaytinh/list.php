<?php
	require("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>List</title>
<style type="text/css">
	tr, td{
		padding-right: 20px;
		text-align: center;
	}
</style>
<script>
function kiemtra(){
	if(!window.confirm("Bạn có muốn xóa sản phẩm này ?")){
		return false;
	}
}
</script>
</head>
<body>
<table align='center' border="1px solid" cellspacing="0">
	<tr>
		<td colspan="7" align='center'><a href="add.php">Thêm sản phẩm</a></td>
	</tr>
	<tr>
		<td>STT</td>
		<td>Mã sp</td>
		<td>Tên sản phẩm</td>
		<td>Số lượng</td>
		<td>Giá thành</td>
		<td>Sửa</td>
		<td>Xóa</td>
	</tr>
	<?php 
		$sql= "select * from ttsp";
		$query = mysql_query($sql);
		if (mysql_num_rows($query) == 0) {
			echo "<tr>";
			echo "<td colspan='7'>Empty Data</td>";
			echo "</tr>";
		} else {
			$stt = 0;
			while ($data = mysql_fetch_assoc($query)) {
				$stt++;
				echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$data[msp]</td>";
				echo "<td>$data[tensp]</td>";
				echo "<td>$data[soluong]</td>";
				echo "<td>$data[giathanh]</td>";
				echo "<td><a href='edit.php?masp=$data[msp]&tensp=$data[tensp]'>Sửa</a></td>";
				echo "<td><a href='del.php?masp=$data[msp]' onclick='return kiemtra()'>Xóa</a></td>";
				echo "</tr>";
			}
		}
	?>
</table>
</body>
</html>