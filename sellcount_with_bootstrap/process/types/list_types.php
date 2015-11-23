<?php
	$title = "List Types";
	$sicon = "table_green_48";
	require ("../partials/top.php");
	require ("types.php");
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
		<td colspan="5">
			<center>
				<a href="../types/add_types.php"><button type="button" class="btn btn-lg btn-primary">Add Types</button></a>
			</center>
		</td>
	</tr>
	<tr class="danger">
		<td>STT</td>
		<td>Mã loại</td>
		<td>Tên loại</td>
		<td>Sửa</td>
		<td>Xóa</td>
	</tr>
	<?php
		echo "";
		$stt=0;
		$types = new types;
		$data = $types->list_types();
		
		foreach ($data as $item) {
			$stt++;
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[maloai]</td>";
			echo "<td>$item[tenloai]</td>";			
			echo "<td><a href='edit_types.php?uml=$item[maloai]'>Sửa</a></td>";
			echo "<td><a href='del_types.php?uml=$item[maloai]' onclick='return xacnhan()'>Xóa</a></td></tr>";
		}
	?>
</table>
</div>
<?php
	require ("../partials/bottom.php");
?>