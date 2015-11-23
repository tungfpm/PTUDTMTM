<table width="735" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">

	  <tr>

      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC"><div align="left" style="color:#0B55C4; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ LOẠI SẢN PHẨM</div></td>

      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; height:65px; width:55px">

		<a href=index.php?controller=sanpham&task=themloaisanpham><img src='../images/bt_them.jpg' width:55px; height:65px;"></a>

		</td>		

      </tr>

    </table>

    

<table width="735" border="0" cellspacing="0" cellpadding="0">  

  <tr height="30" bgcolor="#2d94ff">

    <td align="center" width="250" style="border-right:1px solid #333"><strong>Loại sản phẩm</strong></td>    

    <td align="center" width="100" style="border-right:1px solid #333"><strong>Sửa</strong></td>

    <td align="center" width="100"><strong>Xóa</strong></td>    

  </tr>  
<?php foreach($data as $rows):?>
  <tr>

    <td width="250" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:20px"><?php echo $rows['tenloaisp']; ?></td>    

    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="index.php?controller=sanpham&task=sualoaisanpham&id_loai=<?php echo $rows['id_loai']; ?>">Sửa</a></td>

    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="index.php?controller=sanpham&task=xoaloaisanpham&id_loai=<?php echo $rows['id_loai']; ?>">Xóa</a>

    </td>
  </tr>
 <?php endforeach;?> 
</table> 
