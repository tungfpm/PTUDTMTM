

<table width="560" border="0" cellspacing="0" cellpadding="0" >



<tr>

    <td width="560" height="35" background="images/bg_menu53.png"><div align="left" style="color:#000000; font-family:Tahoma; font-size: 14px; padding-left:10px"><img src="images/new.gif" width="28" height="11"> SẢN PHẨM</div></td>

</tr>

<tr>

<td align="center" style="padding-left:3px; padding-right:3px; border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;">



<?php foreach($data as $rows):?>

<?php $gia = $rows['gia']; $giasp=number_format($gia,0,'','.');?>

<?php $giakm = $rows['giakm']; $giakmsp=number_format($giakm,0,'','.');?>

<div class=sanpham>

		

		<table width=175 height=285 border=0 cellspacing=0 cellpadding=0 background="images/box.gif" style="border:1px dotted #999">

			<?php if($rows['ghichu']=="khuyenmai")

			{

			echo "<tr>

			<td height=\"25\" style=\"background:url(images/khuyenmai_small.jpg) no-repeat; padding-left:10px; \"></TD>

			</tr>";

			}

			else

			{

			echo "<tr>

			<td height=\"25\" style=\"background:url(images/conhang.jpg) no-repeat; padding-left:20px; \"></TD>

			</tr>";

			}

			?>



		  <tr>

			<td height=170><a href=index.php?controller=sanpham&task=chitietsanpham&id=<?php echo $rows['id'];?>><img src=sanpham/small/<?php echo $rows['hinh'];?> width=170px height=170 border=0> </a></td>

		  </tr>

		  <tr>

			<td height=35 style="font-size:13px; color:#F00"><strong><?php echo $rows['tensp'];?></strong></td>

		  </tr>

		<?php if($rows['ghichu']=="khuyenmai")

		  {

			echo "<tr><td height=25><strike>Giá cũ: ".$giasp." VNĐ</strike></td></tr> <tr><td height=25><b>Giá KM: ".$giakmsp." VNĐ</b></td></tr>";

		  }

		  else

		  {

			echo "<tr><td height=25></td></tr> <tr><td height=25><b>Giá: ".$giasp." VNĐ</b></td></tr>";

		  }

		  ?>

		  

		</table>	

		

</div>



<?php endforeach;?>



</td>



</table>