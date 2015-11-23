<meta charset=utf-8>
<title>List Tour</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<style>
body{
    background-color: pink;
}
	div.list-tour{
		width:100%;
		height:100%;
	}
	div.list-tour table td.name{
		width:300px;
	}
	.list-tour a {
		color: #fff;
	}
</style>
<script>
	function kiemtra(){
		if(!window.confirm("Bạn có muốn xoá Tour du lịch này không?")){
			return false;
		}
	}
</script>
<div class="list-tour container">
<table align='center' class="table table-hover table-bordered">
<tr>
	<th colspan="9" class="info"><center><h2>Danh sách Tour - <a href='menu.php'>
	<button type='button' class='btn btn-primary btn-sm'>Back</button>
	</a></h2></center></th>
</tr>
<tr class="success">
	<th>STT</th>
	<th>Tên tour</th>
	<th>Thời gian</th>
	<th>Giá</th>
	<th>Khởi hành</th>
	<th>Nơi xuất phát</th>
	<th>Nơi kết thúc</th>
	<th>Hình ảnh</th>
	<th>Action</th>
</tr>	
<?php
require("tour.php");
// if(check_permission()!='admin'){
	// header("location:index.php");
	// exit();
// }
$stt=0;
$muser=new tour();
$data=$muser->listall();
foreach($data as $item){
	$stt++;
	echo"<tr>";
	echo"<td>$stt</td>";
	echo"<td class='name'>$item[tour_name]</td>";
	echo"<td>$item[tour_time]</td>";
	echo"<td>$item[tour_price]đ</td>";
	echo"<td>$item[tour_start]</td>";
	echo"<td>$item[tour_begin]</td>";
	echo"<td>$item[tour_end]</td>";
	echo"<td><img src ='data/$item[tour_image]'width='50'/></td>";
	echo"<td><a href='edit_tour.php?tid=$item[id]'>
	<button type='button' class='btn btn-warning btn-sm'>Sửa</button>
	</a> - <a href='del_tour.php?tid=$item[id]' onclick='return kiemtra()'>
	<button type='button' class='btn btn-danger btn-sm'>Xoá</button>
	</a></td>";
	echo"</tr>";
}
?>
</table>
</div>
