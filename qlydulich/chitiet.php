<?php 
 require("user/tour.php");
 require("templates/header.php");
 $id=$_GET['id'];
 $mtour=new tour;
 $data=$mtour->chitiet($id);
 echo "<div id='content'>";
 foreach($data as $item){
?>
	<div class="tong">
		<div class="img">
          <img src="<?php echo"user/data/".$item['tour_image'] ?>" width="440px" height="300px">
        </div>
	<div class= "chitiet" >
		<div class="">
			<?php
			echo "<h2>$item[tour_name] </h2>";
			echo "Thời gian: $item[tour_time]<br>";
			echo "Giá: $item[tour_price]đ<br>";
			echo "Ngày khởi hành:";
			$d=explode('-', $item['tour_start']);
			$date=$d[2];
			$month=$d[1];
			$year=$d[0];
			echo $date.'/'.$month.'/'.$year.'<br>';
			echo "Địa điểm khởi hành: $item[tour_begin]<br>";
			echo "Địa điểm đến: $item[tour_end]";
			
			?>
		</div>
		<div class= "dattour">
			<a href= "dattour.php">Đặt tour</a>
		</div>
	</div></div>
<?php 
 }
  require("templates/footer.php");
?>        

