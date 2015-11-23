<table width="735" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">

	  <tr>

      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC"><div align="left" style="color:#0B55C4; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ SẢN PHẨM 	 

      	</div></td>

      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; height:65px; width:55px">

			<a href=index.php?controller=sanpham&task=themsanpham><img src=../images/bt_them.jpg></a>

		</td>		

      </tr>

    </table>

    

<table width="735" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td colspan="9" class="tieude" align="center">DANH SÁCH SẢN PHẨM</td>

  </tr>

  <tr height="30" bgcolor="#c8dbf0">
  
  	<td align="center" width="100" style="border-right:1px solid #333"><strong>Hình</strong></td>

    <td align="center" width="80" style="border-right:1px solid #333"><strong>Tên sản phẩm</strong></td>

    <td align="center" width="135" style="border-right:1px solid #333"><strong>Loại sản phẩm</strong></td>

    <td align="center" width="100" style="border-right:1px solid #333"><strong>Giá ( VND )</strong></td>

    <td align="center" width="80" style="border-right:1px solid #333"><strong>Ghi Chú</strong></td>

    <td align="center" width="50" style="border-right:1px solid #333"><strong>Sửa</strong></td>

    <td align="center" width="50"><strong>Xóa</strong></td>    

  </tr> 
<?php foreach($data as $rows):?>   
  <tr>
	<td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><img src="../sanpham/small/<?php echo $rows['hinh']; ?>" width="50" height="50"></td>
    
    <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b><?php echo $rows['tensp']; ?></b></td>

    <td width="135" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><?php echo $rows['id_loai']; ?></td>

    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><?php echo $rows['gia']; ?></td>

	<td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><?php echo $rows['ghichu']; ?><br>BH <?php echo $rows['baohanh']; ?> tháng</td>    

    <td width="50" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="index.php?controller=sanpham&task=suasanpham&id=<?php echo $rows['id']; ?>">Sửa</a></td>

    <td width="50" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="index.php?controller=sanpham&task=xoasanpham&id=<?php echo $rows['id']; ?>">Xóa</a>

    </td>

  </tr>
<?php endforeach;?>
</table>