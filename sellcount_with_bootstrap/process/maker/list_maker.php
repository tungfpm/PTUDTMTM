<?php
	$title = "List Maker";
	$sicon = "table_green_48";
	require ("../partials/top.php");
	require ("maker.php");
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
				<a href="../maker/add_maker.php"><button type="button" class="btn btn-lg btn-primary">Add Maker</button></a>
			</center>
		</td>
	</tr>
	<tr class="danger">
		<td>STT</td>
		<td>Mã hãng sản xuất</td>
		<td>Tên hãng sản xuất</td>
		<td>Sửa</td>
		<td>Xóa</td>
	</tr>
	<?php
		echo "";
		$stt=0;
		$maker = new maker;
		$data = $maker->list_maker();
		
		foreach ($data as $item) {
			$stt++;
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[mahang]</td>";
			echo "<td>$item[tenhang]</td>";			
			echo "<td><a href='edit_maker.php?umh=$item[mahang]'>Sửa</a></td>";
			echo "<td><a href='del_maker.php?umh=$item[mahang]' onclick='return xacnhan()'>Xóa</a></td></tr>";
		}
	?>
</table>
</div>
<?php
	require ("../partials/bottom.php");
?>