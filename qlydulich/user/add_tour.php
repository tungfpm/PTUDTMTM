<?php
require("tour.php");
$year=date("Y");
$month=date("m");
$date=date("d");
$now=$year.'-'.$month.'-'.$date;
// if(check_permission()!='admin'){
	// header("location:index.php");
	// exit();
// }
if(isset($_POST['ok'])){
	$name=$time=$price=$area=$image=null;
	if($_POST['txtname'] == NULL){
		$error[]= "Vui lòng nhập tên Tour</div>";
	}else{
		$name=$_POST['txtname'];
	}
	if($_POST['txttime'] == NULL){
		$error[]= "Vui lòng nhập thời gian của Tour</div>";
	}else{
		$time=$_POST['txttime'];
	}
	if($_POST['txtprice']==null){
		$error[]= "Vui lòng nhập giá của Tour</div>";
	}else{
		$price=$_POST['txtprice'];
	}
	if($_POST['txtbegin']==null){
		$error[]= "Vui lòng nhập địa điểm khởi hành</div>";
	}else{
		$begin=$_POST['txtbegin'];
	}
	if($_POST['txtstart']==null){
		$error[]= "Vui lòng nhập thời gian xuất phát</div>";
	}else{
		$start=$_POST['txtstart'];
	}
	if($_POST['txtend']==null){
		$error[]= "Vui lòng nhập địa điểm đến</div>";
	}else{
		$end=$_POST['txtend'];
	}
	if ($_FILES["img"]["name"] !=NULL){
		move_uploaded_file($_FILES["img"]["tmp_name"],"data/" .$_FILES["img"]["name"]);
		$image=$_FILES["img"]["name"];
	}else{
		$error[]= "Vui lòng lựa chọn hình ảnh";
	}
	if($name&&$time&&$price&&$start&&$begin&&$end&&$image){
		$mtour = new tour;
		$mtour->set_tour_name($name);
		$mtour->set_tour_price($price);
		$mtour->set_tour_time($time);
		$mtour->set_tour_begin($begin);
		$mtour->set_tour_end($end);
		$mtour->set_tour_start($start);
		$mtour->set_tour_image($image);
		$check=$mtour->check_tour_name();
		if($check){
			$mtour->insert_tour_name();
			header("Location:list_tour.php");
			exit();
		}else{
			$error[]= "Đã tồn tại tour này trên hệ thống";
		}
	}
}
if(isset($_POST['huy'])){
	header("location:menu.php");
	exit();
}
?>
<meta charset=utf-8>
<title>Add Tour</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="add_tour.css" />
<style>
body{
    background-color: pink;
}
</style>
<div class="form">
<form method="post" enctype="multipart/form-data">
<h2>Thêm Tour</h2>
<div><label>Tên tour: </label><input type="text" name="txtname" size="25" /></div>
<div><label>Thời gian: </label><input type="text" name="txttime" size="25" /></div>
<div><label>Giá: </label><input type="text" name="txtprice" size="25" /></div>
<div><label>Khởi hành: </label><input type="date" placeholder="yyyy-mm-dd" name="txtstart" min="<?php echo $now;?>" size="25"/></div>
<div><label>Nơi xuất phát: </label><input type="text" name="txtbegin" size="25"/></div>
<div><label>Nơi đến: </label><input type="text" name="txtend" size="25"/></div>
<div><label for="file">Hình ảnh: </label><input type="file" name="img" size="25" /></div>
<br>
<div>
<center><input type='submit' class='btn btn-default btn-md' value="Them" name="ok">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="menu.php"><button type='button' class='btn btn-default btn-md' value="huy">Hủy</button></a>

</center>
</div>
<div class="message" >
	<?php
		if(!empty($error)){
			foreach($error as $i ){
				echo "<li type='none'>$i</li>";
			}
		}
	?>
</div>
</form>
</div>
</form>