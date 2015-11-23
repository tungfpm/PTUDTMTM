<form method="post" name="formthanhvien" id="formthanhvien" action="index.php?controller=thanhvien&task=capnhatmatkhau&user=<?php echo $_REQUEST['user'];?>">
<table border="0" width="560" cellpadding="0" cellspacing="0" style="border:1px solid #CCCCCC ">
<tr class="tieude" align="center" height="35">
<td colspan="2" >ĐỔI MẬT KHẨU</td>
</tr>
	<tr height="30" bgcolor="#F9F9F9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">
      <td style="padding-left:100px">Mật khẩu cũ: </td>
      <td><input name="passold" type="password" id="pw_old" style="width:220px"/></td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">
      <td style="padding-left:100px">Mật khẩu mới:</td>
      <td><input name="passnew" type="password" id="pw" style="width:220px"/></td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">
      <td style="padding-left:100px">Viết lại mật khẩu:</td>
      <td><input name="apassnew" type="password" id="cpw" style="width:220px"/></td>
    </tr>
    <tr>
      <td height="35" colspan="2" align="center" bgcolor="#2d94ff">
        <input type="submit" name="dongy" value="Đồng ý" class="button" >
	<input type="reset" value="Nhập lại" class="button">
        <input name="act" type="hidden" value="act" /></td>
    </tr>
  </table>
</form>