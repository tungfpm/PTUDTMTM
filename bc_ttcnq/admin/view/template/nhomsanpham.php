<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Bảng điều khiển - MÁY TÍNH HỒNG NGỌC - Máy tính chính hãng giá Sinh Viên </title>

<link type="text/css" rel="stylesheet" href="css/main.css" />

<link type="text/css" rel="stylesheet" href="css/menu.css" />



</head>



<body>



<div id="container">

  <div id="header">

	  <?php include "include/header.php";?>

  </div>    

  <div id="menu-quantri">

	  <?php include "include/menu-top.php";?>

  </div>  

  <br clear="all" />

    <div id="main">  

    	<div id="content-left">       	 

        <?php

       	  	include "include/menu-mn.php";

		?>

        </div>

        

        <div id="content-right">

         <?php

         if (isset($_REQUEST['task']))

         {

         	if($_REQUEST['task'] == "xemnhomsanpham")

         	{

         		include 'include/nhomsp-list.php';

         	}

         	else 

         	{

				include "include/formnhomsanpham.php";

         	}	

         }

         else 

         {

         	include 'include/nhomsp-list.php';

         }

	 	 ?>

        </div>  

    </div>

</div>

<div id="footer">

<?php include "include/footer.php"; ?>   

</div>

</body>

</html>