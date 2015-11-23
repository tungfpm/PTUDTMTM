<table width="735" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">
	  <tr>
      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC"><div align="left" style="color:#0B55C4; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ NHÓM SẢN PHẨM</div></td>
      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; height:65px; width:55px">
		<a href="index.php?controller=sanpham&task=themnhomsanpham"><img src="../images/bt_them.jpg" width:55px; height:65px;"></a>
		</td>				</tr>
    </table>
    
<table width="735" border="0" cellspacing="0" cellpadding="0">  
  <tr height="30" bgcolor="#2d94ff">
    <td align="center" width="485" style="border-right:1px solid #333"><strong>Tên nhóm sản phẩm</strong></td>    
    <td align="center" width="100" style="border-right:1px solid #333"><strong>Sửa</strong></td>
    <td align="center" width="100" name="ok"><strong>Xóa</strong></td>    
  </tr>  <?php foreach ($data as $rows):?>
  <tr>  <td width="485" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><div align="left" style="padding-left:100px"><b><?php echo $rows['tennhom']; ?></b></div></td>    
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="index.php?controller=sanpham&task=suanhomsanpham&id_nhom=<?php echo $rows['id_nhom'];?>">Sửa</a></td>
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="index.php?controller=sanpham&task=xoanhomsanpham&id_nhom=<?php echo $rows['id_nhom'];?>">Xóa</a>
  </td>
  </tr><?php endforeach;?>  </table> 