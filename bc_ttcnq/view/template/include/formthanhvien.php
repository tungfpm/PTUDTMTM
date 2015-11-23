<?php 
if ($_REQUEST['task'] == "dangky")
{
	$title = "ĐĂNG KÝ THÀNH VIÊN";
	$task = "dangkytv";
	$user="";
	$hoten="";
	$email="";
	$diachi="";
	$dienthoai="";
	$disable = "";
}
else 
{
	$title = "SỬA THÔNG TIN CÁ NHÂN";
	$task = "capnhatthongtin";
	$user=$_SESSION["user"];
	$sql="select * from thanhvien where user='$user'";
	$kq=mysql_query($sql);
	$r=mysql_fetch_array($kq);
	$hoten=$r["hoten"];$email=$r["email"];$diachi=$r["diachi"];$dienthoai=$r["dienthoai"];
	$disable = "disabled";
}
?>	

<div align="center">
<form method="post" action="index.php?controller=thanhvien&task=<?php echo $task;?>" name="formthanhvien">
        <table width="560" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="border:1px solid #CCC;">
          <tr>
            <td height="35" colspan="2" align="center" class="tieude"><div align="center"><?php echo $title;?></div></td>
          </tr>
		  <tr>  
            <td height="50" style="padding-left:70px"><div align="left" style="width:120px">Tên đăng nhập:</div></td>
 			<td width="405" style="padding-left:15px" align="left">
                <input type="text" name="user" id="user" style="width:220px" value="<?php echo "$user"; ?>" <?php echo $disable;?> />   
                <font color="#FF0000">* </font>
				<div id="kqkiemtra" style="color:#ff0000;"></div>
              </td>            
          </tr>
		  <tr>            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Mật khẩu:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <input type="password" name="pass" style="width:220px" />
              <font color="#FF0000">*</font></div></td>            
          </tr>
		  <tr>  
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Nhập lại mật khẩu:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <input type="password" name="apass" style="width:220px"/>
              <font color="#FF0000">*</font></div></td>            
          </tr>
          <tr>            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Họ tên:</div></td>
     		<td width="405" style="padding-left:15px">
       		  <div align="left">
       		    <input type="text" name="hoten" style="width:220px" value="<?php echo "$hoten"; ?>"/>
   		      <font color="#FF0000">*</font></div></td>            
          </tr>
          <tr>            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Email:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <input type="text" name="email" style="width:220px" value="<?php echo "$email"; ?>"/>
              <font color="#FF0000">*</font></div></td>            
          </tr>
          <tr>   
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Địa chỉ:</div></td>
 			<td width="405" style="padding-left:15px" valign="top" align="left">              
                <textarea name="diachi" rows="6" style="width:220px"><?php echo "$diachi"; ?></textarea>
              <font color="#FF0000">*</font></td>            
          </tr>       
          <tr>            
            <td height="30" style="padding-left:70px"><div align="left" style="width:120px">Điện thoại:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <input type="number" name="dienthoai" style="width:220px" value="<?php echo "$dienthoai"; ?>">
              <font color="#FF0000">*</font></div></td>            
          </tr>
            <td height="35" colspan="2" align="center" bgcolor="#2d94ff">
              <div align="center">
                <input type="submit" value="Chấp nhận" name="chapnhan" class="button">
	<input type="reset" value="Nhập lại" class="button">	
    		<input type="hidden" name="act"/>
            </div></td>
          </tr>
        </table>
</form>
</div>    