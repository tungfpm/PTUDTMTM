
<table width="960" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">

	  <tr>

      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC"><div align="left" style="color:#0B55C4; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ THÀNH VIÊN</div></td>

		

      </tr>

</table>



<table width="960" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td colspan="9" class="tieude" align="center">DANH SÁCH THÀNH VIÊN</td>

  </tr>

  <tr height="30" bgcolor="#b1d3f8">

    <td align="center" width="150" style="border-right:1px solid #333"><strong>Tên đăng nhập</strong></td>

    <td width="150" align="center" style="border-right:1px solid #333"><strong>Họ tên</strong><strong></strong></td>

    <td align="center" width="180" style="border-right:1px solid #333"><strong>Địa chỉ</strong></td>

    <td align="center" width="175" style="border-right:1px solid #333"><strong>Email</strong></td>

    <td align="center" width="150" style="border-right:1px solid #333"><strong>Điện thoại</strong></td>

    <td align="center" width="80" style="border-right:1px solid #333"><strong>Sửa</strong></td> 
    <td align="center" width="80" style="border-right:1px solid #333"><strong>Xóa</strong></td> 

  </tr>  
  <?php foreach($data as $rows):?>
  <tr>

    <td width="150" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b><?php echo $rows['user']; ?></b></td>

    <td width="150" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">

    <?php echo $rows['hoten']; ?> </a>

    </td>

    <td width="180" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px"><?php echo $rows['diachi']; ?></td>

    <td width="175" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px"><?php echo $rows['email']; ?></td>

    <td width="150" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px"><?php echo $rows['dienthoai']; ?></td>

    <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333; ">	
<a href="index.php?controller=thanhvien&task=suathanhvien&user=<?php echo $rows['user'];?>" >Sửa</a> 
	</td>
	<td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333; ">	
<a href="index.php?controller=thanhvien&task=xoathanhvien&user=<?php echo $rows['user'];?>" >Xóa</a> 
	</td>
  </tr>
<?php endforeach;?>
</table>
