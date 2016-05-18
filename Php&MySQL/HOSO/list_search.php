<?php 
	require_once("book.php");
	if (isset($_GET['ukey'])) {
		$key = $_GET['ukey'];
	} else {
		$key = "";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Search</title>
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
		<th>STT</th>
		<th>Mã sách</th>
		<th>Tên sách</th>
		<th>Tên tác giả</th>
		<th>Nhà XB</th>
		<th>Năm XB</th>
		<th>Giá bán</th>		
		<th>Xóa</th>
	</tr>
	<?php
		$book = new book;
		$data = $book->search($key);
		if ($data == 0) {
			echo "<tr><td colspan='8'><center>Không tìm thấy kết quả nào !</center></td></tr>";
		} else {
			$stt = 0;
			foreach($data as $item){
				$stt++;
				$tg = $book->get_tacgia($item['IDTacGia']);
				echo "<tr";
				if ($item['NamXB'] >= 2010) {
					echo " bgcolor='blue'";
				}
				echo ">";
				echo "<td>$stt</td>";
				echo "<td>$item[IDSach]</td>";
				echo "<td>$item[Tensach]</td>";
				echo "<td>$tg[Hoten]</td>";
				echo "<td>$item[NXB]</td>";
				echo "<td>$item[NamXB]</td>";			
				echo "<td>$item[Gia]</td>";			
				echo "<td><a href='del_book.php?uid=$item[IDSach]' onclick='return xacnhan();'>Xóa</a></td></tr>";
			}
		}		
	?>
</table>
</body>
</html>