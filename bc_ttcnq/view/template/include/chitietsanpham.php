<?php foreach ($data as $rows):?>
<?php $gia = $rows['gia']; $giasp=number_format($gia,0,'','.');?>
<?php $giakm = $rows['giakm']; $giakmsp=number_format($giakm,0,'','.');?>
<?php $mota = $rows['mota']; if($mota=="") $mt='Mô tả của sản phẩm này đang được cập nhật!'; else $mt=$mota;?>

<div style="width:560px">
<table width="560" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" width="448" style="background-color:#c91401; padding-left:30px; color:#FFF; font-size:16px; font-weight:bold">THÔNG TIN SẢN PHẨM</td> 
    <td width="112" height="33"><img src="images/bgtitle.jpg" width="112" height="33"></td>
  </tr>
</table>
<table width="560" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" height="40" style="border-bottom:1px solid #333; background:url(images/toplist-content.gif) repeat-x; font-weight:bold">
    <a href="index.php"><img src="images/Home.gif" width="16" height="16" border="0"></a>
    <img src="images/towred1-r.gif" width="16" height="9">
    <a href="index.php?controller=sanpham&task=chitietsanpham&id=<?php echo $rows['id'] ?>"><?php echo $rows['tensp']; ?></a>
    </td>
    </tr>
	
	<?php
	if($rows['ghichu']=="khuyenmai")
	{
	echo "<tr>
    <td height=\"30\" style=\"background:url(images/khuyenmai_big.jpg) no-repeat; padding-left:20px; \"></TD>
     </tr>";
	}
	else
	{
	echo "<tr>
    <td height=\"30\" style=\"background:url(images/conhang_big.jpg) no-repeat; padding-left:20px; \"></TD>
     </tr>";
	}
	?>
	
  <tr>
    <td width="220" rowspan="7" align="center" valign="top"><div onclick="var win=window.open('zoom.php?id=<?php echo $rows['id']; ?>', 'open_window', 'width=505, height=530, left=0, top=0')"><img src=sanpham/small/<?php echo $rows['hinh'];?> width="170" height="170"><br /><img align="middle" src="images/zoom2.gif" width="32" height="32"><b>Xem ảnh lớn.</b>
</div>
	<form method="post" name="form">
    <input type="hidden" name="dathang" />
	<input type="hidden" value=<?php echo "$id"; ?> name="catid" /> 
    <input type="hidden" name="gia" value="<?php echo "$giasp"; ?>" />
    <?php 
	//if(isset($_SESSION["user"]))
	//{
	   echo"<a href='them_giohang.php?id=$rows[id]'><img src=\"images/chovaogiohang.jpg\" width=\"151\" height=21 border=0></a>";
	//}
	//else
		//echo "<a href=\"index.php?b=gh&id=$id&g=$gia\"><img src=\"images/chovaogiohang.jpg\" width=\"151\" height=21 border=0></a>";
	?>
    </form></td>
    <td width="120" height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Tên sản phẩm:</td>
    <td width="220" style="border-bottom:1px dotted #666; padding-left:5px"><span style="font-size:18px; color:#00F; font-weight:bold"><?php echo $rows['tensp']; ?></span></td>
  </tr>
  <tr>
    <td height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Giá:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px">
	<?php
	if($rows['ghichu']=="khuyenmai")
	{
		if($giasp==0 or $giakmsp==0) echo "( Liên hệ )"; else echo "<strike>".$giasp." VND </strike><br><font color=red size=4> <b>".$giakmsp." VNĐ</b><img src=images/hot.gif></font>";
		
	}
	else
	{
		if($giasp==0) echo "( Liên hệ )"; else echo "<font color=red size=4> <b> ".$giasp." VND </b></font><br>";
	}
	?>
	</td>
  </tr>
  <tr>
    <td height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Thuế VAT:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px"><font color="#FF0000">Giá trên chưa bao gồm thuế</font></td>
  </tr>
  <tr>
    <td height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Bảo hành:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px"><?php echo $rows['baohanh']; ?> tháng. <A onclick="var win=window.open('include/baohanh.php', 'open_window', 'width=600, height=420, left=0, top=0')"> (Điều kiện bảo hành)</a></td>
  </tr>
  <tr>
    <td height="40" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Vận chuyển:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px">Giao hàng miễn phí trong phạm vi thành phố.</td>
  </tr>
  <tr>
    <td height="40" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Thời gian <br />
      giao hàng:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px">
     <?php 
		if($tinhtrang==0) echo "<strong>7 ngày</strong> sau khi đặt hàng";
		else echo "<strong>1 ngày</strong> sau khi đặt hàng";
	?>
    </td>
  </tr>  
  <tr>
    <td height="70" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Hình thức<br />
thanh toán:</td>
    <td style="padding-left:5px">Tiền mặt hoặc chuyển khoản.<br />
      <a onclick="var win=window.open('include/taikhoan.php', 'open_window', 'width=500, height=120, left=0, top=0')">Nhấn vào đây</a> để xem địa chỉ thanh toán.</td>
  </tr>
  <tr>
    <td align="center"></td>
    <td style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">HOTLINE: </td>
   
    <div style="height:3px"></div>
    </td>
	<td>
    &nbsp; 01674 180 940
    </td>
  </tr>
  <tr>
 	<td width="220" height="30" align="center"></td>
    <td style="padding-left:20px; border-right:1px dotted #666">Hỗ trợ Online:</td>
	<td><a href="ymsgr:sendIM?admin">&nbsp;
    <img src="images/yahoo.gif" align="admin" border="0" /></a>&nbsp;
    </td>
    </tr>
  <tr>
    <td align="justify" colspan="3" style="border-bottom:1px solid #333; padding-bottom:5px; color:#F00">
    </td>
  </tr>  
</table>
<table width="560" border="0" cellspacing="0" cellpadding="0" style="padding-top:5px;">
<tr>
  	<td>
    <div id="TabbedPanels1" class="TabbedPanels">
  	  <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab">Mô tả sản phẩm</li>
	    </ul>
       
  	  <div class="TabbedPanelsContentGroup">
	   <!-- Mô tả sản phẩm --> 
        <div class="TabbedPanelsContent">
        <table width="552" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="line-height:25px"><?php echo $mt; ?></td>
          </tr>
        </table>
        </div>
       <!-- end - Mô tả sản phẩm -->        
       
       <!-- đánh giá 
        <div class="TabbedPanelsContent"></div>
       --> 
               
       <!-- bảo hành         
        <div class="TabbedPanelsContent"></div>
       bảo hành -->
	    </div>
	  </div></td>  
  </tr>
</table>

</div>
<?php endforeach;?>

