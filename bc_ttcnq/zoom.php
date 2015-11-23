<?php 	include "config.php";

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>

<?php

	if(isset($_REQUEST["id"]))

	{	

		$id2=$_REQUEST["id"];	

		$sql2=mysql_query("select * from sanpham where id='$id2'");

		while($r2=mysql_fetch_array($sql2))

		{

		$idsp2=$r2["id"];$tensp2=$r2["tensp"];

			echo ".::$tensp2 - MÁY TÍNH HỒNG NGỌC::.";		

		} 

	}

	else

		echo ".::Zoom by MÁY TÍNH HỒNG NGỌC::.";



?>

</title>

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style></head>



<body>

<?php

	$id=$_GET["id"];

	

	if(isset($_GET["idk"]))

	{

		$idk=$_GET["idk"];

		$sql="SELECT * from kieudan where id_kieu='$idk'";

		$kq=mysql_query($sql);

		$r=mysql_fetch_array($kq);	

		$hinh=$r["hinh"];$id=$r["id_kieu"];

		$tenkieu=$r["tenkieu"];		

	}

	else{

	$sql="SELECT * from sanpham where id='$id'";

	$kq=mysql_query($sql);

	$r=mysql_fetch_array($kq);	

	$hinh=$r["hinh"];$id=$r["id"];

	$tensp=$r["tensp"];}

?>

<center>

<table width="400" height="520" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td height="50"style="border-bottom:1px solid #333;" align="center"><span style="color:#00F; font-weight:bold; font-size:20px;">Hình ảnh chi tiết sản phẩm:</span><span style="color:#F00; font-weight:bold; font-size:24px;"> <?php if(isset($idk)) echo $tenkieu; else echo $tensp; ?></span></td>

  </tr>

  <tr>

  	<td height="400"><a onclick="var win=window.close()"><img src="sanpham/large/<?php echo $hinh; ?>" width="400" height="399"></a></td>

  </tr>

  <tr>

  	<td height="40" align="center" style="border-top:1px solid #333;"><a onclick="var win=window.close()"><b>Đóng cửa sổ [x]</b></a></td>

  </tr>



</table>

</center>

</body>

</html>