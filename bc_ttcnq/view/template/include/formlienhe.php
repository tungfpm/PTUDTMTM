<?php 

$user=$_SESSION["user"];

$sql="select * from thanhvien where user='$user'";

$kq=mysql_query($sql);

$r=mysql_fetch_array($kq);

$hoten=$r["hoten"];$email=$r["email"];$diachi=$r["diachi"];$dienthoai=$r["dienthoai"];

?>

<div align="center" style="width:550px; line-height:25px; padding:5px;">

<div align="left">Quý khách có thể liên hệ với chúng tôi bằng cách soạn thông tin theo mẫu sau. Rất mong quý khách điền các thông tin sau <strong>chính xác</strong> và <strong>đầy đủ</strong> để chúng tôi có thể liên hệ lại với quý khách một cách sớm nhất.<br>

  ( Lưu ý: những thông tin có dấu <font color="#FF0000">*</font> là bắt buộc phải nhập. )<br>

  <form method="post" action="index.php?controller=thanhvien&task=guilienhe"  name="formlienhe" id="formlienhe">

  <table width="550" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td height="30"><div style="padding-left:70px">Họ và tên: <font color="#FF0000">*</font> </div></td>

    <td><input name="hoten" type="text" size="35" maxlength="50" value="<?php echo $hoten;?>"></td>

  </tr>

   <tr>

    <td height="30"><div style="padding-left:70px">Email:<font color="#FF0000"> *</font></div></td>

    <td><input name="email" type="text" size="35" maxlength="50" value="<?php echo $email;?>"></td>

  </tr>

  <tr>

    <td height="30"><div style="padding-left:70px">Số điện thoại:</div></td>

    <td><input name="dienthoai" type="number" size="35" maxlength="50" value="<?php echo $dienthoai;?>"></td>

  </tr>

   <tr>

    <td height="30"><div style="padding-left:70px">Địa chỉ:</div></td>

    <td><input name="diachi" type="text" size="35" maxlength="50" value="<?php echo $diachi;?>"></td>

  </tr>

  <tr>

    <td height="120"><div style="padding-left:70px">Nội dung: <font color="#FF0000">*</font></div></td>

    <td width="350" height="120"><textarea name="noidung" cols="35" rows="6" ></textarea></td>

  </tr>

  <tr>

    <td colspan="2" align="center" height="30">

    <input type="submit" value="Gửi" class="button" >

	<input type="reset" value="Nhập lại" class="button">

	<input type="hidden" name="act">

	</td>

  </tr>

</table>

</form>

</div>

</div>