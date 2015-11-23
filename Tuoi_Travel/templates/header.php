<?php
  $d1 = "Đăng nhập";
  $ld1 = "user/login.php";
  $d2 = "Đăng ký";
  $ld2 = "user/register.php";
  session_start();
  if(isset($_SESSION['ses_level'])){
    $d1 = $_SESSION['ses_username'];
    $ld1 = "user/profile.php";
    $d2 = "thoát";
    $ld2 = "user/logout.php";
  } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Travel Guide</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
</head>
<body>
    <div id="container">
      <div id="header-top"></div>
      <div id="header" >
          <img src="image/bg-header.jpg" alt="bg-header">
          <div id="viewcheck">
              <a href="<?php echo $ld1;?>"><?php echo $d1;?> </a>|
              <a href="<?php echo $ld2;?>"> <?php echo $d2;?></a>              
          </div>
          <ul id="menu">
            <li><a href="index.php"> Trang chủ</a></li>
            <li><a href="#"> Tìm kiếm</a></li>
            <li><a href="#"> Khuyến mại</a></li>
            <li><a href="#"> Thanh toán</a></li>
            <li><a href="#"> Tư vấn</a></li>
          </ul>
      </div>