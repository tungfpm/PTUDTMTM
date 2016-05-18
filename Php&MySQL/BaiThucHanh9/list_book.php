<?php
	require('book.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>List_book</title>
<script>
	function xacnhan(){
		if(!window.confirm("Bạn có muốn xóa sách này ?")){
			return false;
		}
	}
</script>
<style type="text/css">
	td, tr {
		border: 1px solid;
	}
	a{
		text-decoration: none;
	}
</style>
</head>
<body>
	<table width='600' align='center' cellspacing="0">
	<tr>
		<td colspan="8"><center><a href='add_book.php'>Add Book</a></center></td>
	</tr>
	<tr>
		<td>STT</td>
		<td>Mã Sách</td>
		<td>Tên Sách</td>
		<td>Số Lượng</td>
		<td>Giá Thành</td>
		<td>Thành Tiền</td>
		<td>Sửa</td>
		<td>Xóa</td>
	</tr>
	<?php
	session_start();
		
		$stt=0;
		$book = new book;
		$data = $book->list_book();
		
		foreach ($data as $item) {
			$stt++;
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[masach]</td>";
			echo "<td>$item[tensach]</td>";
			echo "<td>$item[soluong]</td>";
			echo "<td>$item[giathanh]</td>";
			echo "<td>";
			echo $item['giathanh']*$item['soluong'];
			echo "</td>";
			echo "<td><a href='edit_book.php?umasach=$item[masach]'>Sửa</a></td>";
			echo "<td><a href='del_book.php?umasach=$item[masach]' onclick='return xacnhan();'>Xóa</a></td></tr>";
		}
	?>
</table>
</body>
</html>