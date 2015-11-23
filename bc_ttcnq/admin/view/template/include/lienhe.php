
<table width="960" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">

	  <tr>

      	<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC"><div align="left" style="color:#0B55C4; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ LIÊN HỆ 	 

      	</div></td>

		<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-right:1px solid #CCCCCC; height:65px; width:55px">

		<input type="submit" name="xoa" value='' onClick="return checklh();document.form.submit();" style="background:url(../images/bt_xoa.jpg); width:55px; height:65px;">       

        </td>

      </tr>

</table>



<table width="960" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td colspan="6" class="tieude" align="center">DANH SÁCH KHÁCH HÀNG LIÊN HỆ</td>

  </tr>

  <tr height="30" bgcolor="#b1d3f8">

    <td align="center" width="200" style="border-right:1px solid #333"><strong>Ngày Liên Hệ</strong></td>

    <td width="200" align="center" style="border-right:1px solid #333"><strong>Khách hàng</strong><strong></strong></td>

    <td align="center" width="460" style="border-right:1px solid #333"><strong>Nội dung</strong></td>

    <td align="center" width="50" style="border-right:1px solid #333">Xóa</td>

  </tr>  

<?php foreach($data as $rows):?>
  <tr>

    <td width="200" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b><?php echo $rows['ngaylienhe'];; ?></b></td>

    <td width="200" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><?php echo $rows['hoten']; ?> </a></td>

    <td width="460" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px"><?php echo $rows['noidung']; ?></td>

    <td width="50" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="index.php?controller=thanhvien&task=xoalienhe&id_lienhe=<?php echo $rows['id_lienhe']; ?>">Xóa</a></td>   

  </tr>
<?php endforeach;?>
  <tr>

	<td colspan="6" class="ketthuc">

    </td>

  </tr> 

</table>