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
$tid=$_GET['tid'];
if(isset($_POST['ok'])){
	$name=$time=$price=$begin=$end=$image=$start=null;
	if($_POST['txtname'] == NULL){
		$error[]= "Vui lòng nhập tên Tour";
	}else{
		$name=$_POST['txtname'];
	}
	if($_POST['txttime'] == NULL){
		$error[]= "Vui lòng nhập thời gian của Tour";
	}else{
		$time=$_POST['txttime'];
	}
	if($_POST['txtprice']==null){
		$error[]= "Vui lòng nhập giá của Tour";
	}else{
		$price=$_POST['txtprice'];
	}
	if($_POST['txtbegin']==null){
		$error[]= "Vui lòng nhập địa điểm khởi hành";
	}else{
		$begin=$_POST['txtbegin'];
	}
	if($_POST['txtstart']==null){
		$error[]= "Vui lòng nhập thời gian xuất phát</div>";
	}else{
		$start=$_POST['txtstart'];
	}
	if($_POST['txtend']==null){
		$error[]= "Vui lòng nhập địa điểm kết thúc";
	}else{
		$end=$_POST['txtend'];
	}
	if ($_FILES["img"]["name"] !=NULL){
		move_uploaded_file($_FILES["img"]["tmp_name"],"data/" .$_FILES["img"]["name"]);
		$image=$_FILES["img"]["name"];
	}else{
		$image=null;
	}
	/*$date=$_POST['ngay'];
	$month=$_POST['thang'];
	$year=$_POST['nam'];
	$start=$date."/".$month."/".$year;*/
	if($name&&$time&&$price&&$start&&$begin&&$end){
		$mtour = new tour;
		$mtour->set_tour_name($name);
		$mtour->set_tour_price($price);
		$mtour->set_tour_time($time);
		$mtour->set_tour_begin($begin);
		$mtour->set_tour_end($end);
		$mtour->set_tour_start($start);
		$mtour->set_tour_image($image);
		$check=$mtour->check_tour_name2($tid);
		if($check){
			$mtour->update_tour_name($tid);
			header("location:list_tour.php");
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
$mtour= new tour;
$arr=$mtour->get_tour($tid);
?>

<title>Edit Tour</title>
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
<h2>Sửa Tour</h2>
<div><label>Tên tour: </label><input type="text" name="txtname" value="<?php echo $arr['tour_name']?>" size="25" /></div>
<div><label>Thời gian: </label><input type="text" name="txttime" value="<?php echo $arr['tour_time']?>" size="25" /></div>
<div><label>Giá: </label><input type="text" name="txtprice" value="<?php echo $arr['tour_price']?>" size="25" /></div>
<div><label>Khởi hành: </label><input type="date" name="txtstart" placeholder="yyyy-mm-dd" min="<?php echo $now;?>" value="<?php echo $arr['tour_start']?>" size="25"/>
</div>
<div><label>Nơi xuất phát: </label><input type="text" name="txtbegin" value="<?php echo $arr['tour_begin']?>" size="25"/></div>
<div><label>Nơi kết thúc: </label><input type="text" name="txtend" value="<?php echo $arr['tour_end']?>" size="25"/></div>
<div><label>Hình ảnh cũ:</label><?php echo"<img src ='data/$arr[tour_image]'width='50'/>" ?></div>
<div><label for="file">Hình ảnh: </label><input type="file" name="img" size="25" /></div>
<div><input type="submit" name="ok" value="Hoàn tất" />
<input type="submit" name="huy" value="Huỷ"/></div>
<div class="message">
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