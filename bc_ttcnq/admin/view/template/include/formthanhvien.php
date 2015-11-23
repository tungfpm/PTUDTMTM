<?php foreach($data as $rows):?>
<form method="post" action="index.php?controller=thanhvien&task=capnhatthanhvien&user=<?php echo $rows['user'];?>">
        <table align="center" width="560" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="border:1px solid #CCC;">
          <tr>
            <td height="35" colspan="2" align="center" class="tieude"><div align="center">THAY ĐỔI THÔNG TIN CÁ NHÂN - <?php echo $rows['hoten']; ?></div></td>
          </tr>
		  <tr bgcolor="#f9f9f9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">  
            <td height="50" style="padding-left:70px"><div align="left" style="width:120px">Tên đăng nhập:</div></td>
 			<td width="405" style="padding-left:15px" align="left">
                <?php echo $rows['user']; ?>
				<div id="kqkiemtra"></div>
              </td>            
          </tr>		  
          <tr onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#FFFFFF'">            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Họ tên:</div></td>
     		<td width="405" style="padding-left:15px">
       		  <div align="left">
       		    <input type="text" name="hoten" style="width:220px" value="<?php echo $rows['hoten']; ?>"/>
   		      <font color="#FF0000">*</font></div></td>            
          </tr>
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Email:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <input type="text" name="email" style="width:220px" value="<?php echo $rows['email']; ?>"/>
              <font color="#FF0000">*</font></div></td>            
          </tr>
          <tr onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#FFFFFF'">   
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Địa chỉ:</div></td>
 			<td width="405" style="padding-left:15px" valign="top" align="left">              
                <textarea name="diachi" rows="6" style="width:220px"><?php echo $rows['diachi']; ?></textarea>
              <font color="#FF0000">*</font></td>            
          </tr>       
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Điện thoại:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <input type="text" name="dienthoai" style="width:220px" value="<?php echo $rows['dienthoai']; ?>"/>
              <font color="#FF0000">*</font></div></td>            
          </tr>
          
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px"></div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <input type="submit" value="Lưu" name="luu"><input type="reset" value="Xóa trắng" name="xoa">
              </div></td>            
          </tr>
             </table>
</form>
<?php endforeach;?>