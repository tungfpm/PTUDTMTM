<?php 
	require_once("hoadon.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hóa đơn</title>
</head>
<script>
	function xacnhan(){
		if(!window.confirm("Bạn có muốn xóa hóa đơn này ?")){
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
		<th>Mã HD</th>
		<th>Mã Phòng</th>
		<th>Tên Phòng</th>
		<th>Số SV</th>
		<th>Chỉ số đầu</th>
		<th>Chỉ số cuối</th>
		<th>Thành tiền</th>
		<th>Xóa</th>
	</tr>
	<?php
		$hd = new hoadon;
		$data = $hd->list_hd();
		if ($data == 0) {
			echo "<tr><td colspan='9'><center>Empty Data</center></td></tr>";
		} else {
			$stt = 0;
			foreach($data as $item){
			$stt++;
			$phong = $hd->get_tenphong($item['MaPhong']);
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[MaHD]</td>";
			echo "<td>$item[MaPhong]</td>";
			echo "<td>$phong[TenPhong]</td>";
			echo "<td>$phong[SoSV]</td>";
			echo "<td>$item[ChiSoDau]</td>";		
			echo "<td>$item[ChiSoCuoi]</td>";		
			echo "<td>$item[ThanhTien]</td>";		
			echo "<td>
				<a href='xoa.php?uid=$item[MaHD]' onclick='return xacnhan();'>Xóa</a>
			</td></tr>";
		}
		}		
	?>
</table>
</body>
</html>