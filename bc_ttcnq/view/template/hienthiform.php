<?php
 ini_set('display_errors', 0);
if(!isset($_SESSION))
	session_start();
	$user=$_SESSION["user"];
	$title="Máy tính HỒNG NGỌC - Máy tính chính hãng giá Sinh Viên";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
echo $title;
?></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/menu.css" />

</head>

<body onload="kt()">
<div id="container">
	<div id="header">
	  <?php include "include/header.php";?>
  </div>
    <div id="menu-ngang">      
	 <?php include "include/menu-top.php"; ?>   
    </div>
    <br clear="all" />
      
    <div id="main" style="margin-top:0px;">
    	<div id="content-left">
              <?php include "include/menu-left.php";?>  
        </div>
        
        <div id="content-right">
		<div style="height:5px"></div>
		<?php
        if(isset($_SESSION["success"])){
            include "include/login_success.php";
        }
        else
            include "include/login.php";
        ?>
		<div style="height:5px"></div>
		<?php include "include/content-right.php"; ?>
        <div style="height:5px"></div>
        <?php include "include/timkiem.php"; ?>		
        <div style="height:5px"></div>
        <?php include "include/giohang.php"; ?>	
        <div style="height:5px"></div> 
        <?php include "include/hotro.php"; ?> 
        <div style="height:5px"></div>	       
   		<?php include "include/quangcao.php"; ?>           	         	  
        </div>
        	
        <div id="content">
		<?php include "include/intro.php"; ?>
		<?php include "include/formthanhvien.php"; ?>
		</div>
    </div>
</div>
<div id="footer">
<?php include "include/footer.php"; ?>   
</div>
</body>
</html>
		
