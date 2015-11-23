<?php
	$title = "List Product";
	$sicon = "table_green_48";
	require_once ("../partials/top.php");
	require_once ("product.php");
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
		<td colspan="11">
			<center>
				<a href="../product/add_product.php"><button type="button" class="btn btn-lg btn-primary">Add product</button></a>
			</center>
		</td>
	</tr>
	<tr class="danger">
		<td>STT</td>
		<td>Mã sản phẩm</td>
		<td>Tên sản phẩm</td>
		<td>Ảnh sản phẩm</td>
		<td>Giá sản phẩm</td>
		<td>Số lượng</td>
		<td>Mã hãng</td>
		<td>Mã loại</td>
		<td>Thông tin thêm</td>
		<td>Sửa</td>
		<td>Xóa</td>
	</tr>
	<?php
		echo "";
		$stt=0;
		$product = new product;
		$data = $product->list_product();
		
		foreach ($data as $item) {
			$stt++;
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[masp]</td>";
			echo "<td>$item[tensp]</td>";			
			echo "<td>$item[anh] - <img src ='data_img/$item[anh]' width='50' 
			class='img-rounded' alt='Error. No Image to Load'/></td>";
			echo "<td>$item[gia]</td>";			
			echo "<td>$item[soluong]</td>";			
			echo "<td>$item[mahang]</td>";			
			echo "<td>$item[maloai]</td>";			
			echo "<td>$item[ttthem]</td>";			
			echo "<td><a href='edit_product.php?umsp=$item[masp]'>Sửa</a></td>";
			echo "<td><a href='del_product.php?umsp=$item[masp]' onclick='return xacnhan()'>Xóa</a></td></tr>";
		}
	?>
</table>
</div>
<?php
	require_once ("../partials/bottom.php");
?>