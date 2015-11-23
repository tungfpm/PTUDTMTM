<table width="195" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #CCCCCC ">
  <tr>
	<td width="195" height="35" background="images/bgn_unlock2.png"><div align="left" style="color:#000; font-family:Tahoma; font-size: 13px; font-weight:bold; padding-left: 30px">THÔNG TIN ĐĂNG NHẬP
	</div></td>
  </tr>
  <tr>
	<td height="35" bgcolor="#F9F9F9">
	<div align="left" style="color:#000; font-family:Tahoma; font-size: 13px; color:#000000; padding-left:5px; font-weight:bold"><img align="absmiddle" src="images/towred1-r.gif">Xin chào: <?php echo $_SESSION['user']; ?></div></td>
  </tr>
   <?php
 if ($_SESSION['user']=="admin")
	{
	echo "<tr>
  	<td height=30 style=padding-left:20px><font color=red><b>&raquo; <a href=admincp target=_balnk><font color=red><b>BẢNG ĐIỀU KHIỂN</b><font></a></b><font></td> </tr>";
	}
 ?>
  <tr>
  	<td height="30" style="padding-left:20px">&raquo; <a href=index.php?controller=thanhvien&task=xemthongtin&user=<?php echo $_SESSION['user']?>>Thông tin cá nhân</a></td>
  </tr>
    <tr>
  	<td height="30" style="padding-left:20px">&raquo;<a href="index.php?controller=thanhvien&task=doimatkhau&user=<?php echo $_SESSION['user']?>"> Đổi mật khẩu</a></td>
  </tr>

	
  <tr>
	<td height="25" style="border-top:1px dotted #CCCCCC"><div align="center"><a href="index.php?controller=thanhvien&task=dangxuat" style="color:#000; font-family:Tahoma; font-size: 12px; font-weight:bold;">THOÁT ĐĂNG NHẬP</a><br />
	</div></td>
  </tr>
</table>          