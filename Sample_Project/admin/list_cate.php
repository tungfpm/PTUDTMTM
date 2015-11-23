<?php
require("../includes/session.php");
require("../includes/config.php");
?>
<link href='style.css' rel='stylesheet' type='text/css' />
<script language="javascript">
function xacnhan(){
	if(!window.confirm('Bạn có chắc là muốn xóa chuyên mục này không ?')){
		return false;
	}
}
</script>
<table align='center' width='350'>
	<tr>
		<td class='title' colspan="2"><a href="index.php">Home</a></td>
		<td class='title' colspan="2"><a href="add_cate.php">Thêm chuyên mục</a></td>
	</tr>
	<tr>
		<td class='title'>STT</td>
		<td class='title'>Tên chuyên mục</td>
		<td class='title'>Sửa</td>
		<td class='title'>Xóa</td>
	</tr>
<?php
$B=3;
if(isset($_GET['page'])){
	$C=$_GET['page'];
}else{
	$sql="select * from cate_news";
	$query=mysql_query($sql);
	$A=mysql_num_rows($query);
	$C=ceil($A/$B);
}
if(isset($_GET['start'])){
	$X=$_GET['start'];
}else{
	$X=0;
}

$sql="select * from cate_news limit $X,$B";
$query=mysql_query($sql);
if(mysql_num_rows($query) == 0){
	echo "<tr>";
	echo "<td colspan='4'>Empty Data</td>";
	echo "</tr>";
}else{
	$stt=0;
	while($data=mysql_fetch_assoc($query)){
		$stt++;
		echo "<tr>";
		echo "<td>$stt</td>";
		echo "<td>$data[cate_title]</td>";
		echo "<td><a href='edit_cate.php?cid=$data[cate_id]'>Sửa<a></td>";
		echo "<td><a href='del_cate.php?cid=$data[cate_id]' onclick='return xacnhan();'>Xóa</a></td>";
		echo "</tr>";
	}
}
?>
</table>

<div align="center">
<?php
	if($C > 1){
		$D=$X/$B + 1;
		if($D != 1){
			echo "<a href='list_cate.php?start=0&page=$C' class='link'>Trang đầu</a> ";
			$Y=$X-$B;
			echo "<a href='list_cate.php?start=$Y&page=$C' class='link'>Trang trước</a>";
		}

		$begin=$D - 2;
		if($begin < 1){
			$begin=1;
		}
		$end=$D + 2;
		if($end > $C){
			$end=$C;
		}
		for($i=$begin;$i<=$end;$i++){
			if($D == $i){
				echo " <span class='active'>$i</span> ";
			}else{
				$Y=($i-1)*$B;
				echo " <a href='list_cate.php?start=$Y&page=$C' class='link'>$i</a> ";
			}
		}
		if($D != $C){
			$Y=$X+$B;
			echo "<a href='list_cate.php?start=$Y&page=$C' class='link'>Trang kế</a>";
			$Y=($C-1)*$B;
			echo " <a href='list_cate.php?start=$Y&page=$C' class='link'>Trang cuối</a>";
		}
	}
?>	
</div>
