<?php 
 require("user/tour.php");
 require("templates/header.php");
 
 $mtour=new tour;
 $data=$mtour->hienthi();
 echo "<div id='content'>";
 foreach($data as $item){
?>
		<div class="cell">
          <a href="chitiet.php?id=<?php echo $item['id']; ?>"><img src="<?php echo"user/data/".$item['tour_image'] ?>" width="440px" height="300px"></a>
          <a href="chitiet.php?id=<?php echo $item['id']; ?>"><h4>Xem chi tiết</h4></a>
          <h3><?php echo $item['tour_end'] ?></h3>
        </div>

<!--<div id="content">
        <div class="cell">
          <img src="image/nhatrang.jpg" alt="Nha Trang" width="440px" height="300px">
          <a href=""><h4>Xem chi tiết</h4></a>
          <h3>Nha Trang</h3>
        </div>
        <div class="cell">
          <img src="image/pari.jpg" alt="Nha Trang" width="440px" height="300px">
          <a href=""><h4>Xem chi tiết</h4></a>
          <h3>Pari</h3>
        </div>
        <div class="cell">
          <img src="image/denchua.jpg" alt="Nha Trang" width="440px" height="300px">
          <a href=""><h4>Xem chi tiết</h4></a>
          <h3>Đền chùa</h3>
        </div>
        <div class="cell">
          <img src="image/nhatrang.jpg" alt="Nha Trang" width="440px" height="300px">
          <a href=""><h4>Xem chi tiết</h4></a>
          <h3>Nha Trang</h3>
        </div>
        .-->
<?php 
 }
  require("templates/footer.php");
?>        

