<?php 
	require_once("book.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Book</title>
</head>
<script>
	function xacnhan(){
		if(!window.confirm("Bạn có muốn xóa sách này ?")){
			return false;
		}
	}
</script>
<style type="text/css">
	th, td, tr {
		border: 1px solid;
	}
</style>
<body>
<table width="700px" align="center" cellspacing="0">
	<tr>
		<th>Mã sách</th>
		<th>Tên sách</th>
		<th>Tác giả</th>
		<th>Năm xuất bản</th>
		<th>Nhà xuất bản</th>
		<th>Action</th>
	</tr>
	<?php
		$book = new book;
		$data = $book->list_book();
		if ($data == 0) {
			echo "<tr><td colspan='6'><center>Empty Data</center></td></tr>";
		} else {
			foreach($data as $item){
			$nxb = $book->get_nhaxb($item['manhaXB']);
			echo "<tr>";
			echo "<td>$item[masach]</td>";
			echo "<td>$item[tensach]</td>";
			echo "<td>$item[tacgia]</td>";
			echo "<td>$item[namXB]</td>";
			echo "<td>$nxb[nhaXB]</td>";			
			echo "<td>
				<a href='edit_book.php?ums=$item[masach]'>Sửa/</a>
				<a href='del_book.php?ums=$item[masach]' onclick='return xacnhan();'>Xóa</a>
			</td></tr>";
		}
		}		
	?>
</table>
</body>
</html>