
<table width="735" border="0" cellspacing="0" cellpadding="0">

<form method="POST" action="index.php?controller=sanpham&task=capnhatnhomsp&id_nhom=<?php echo $data['id_nhom'];?>">

  <tr>

    <td colspan="2" class="tieude" align="center">SỬA NHÓM SẢN PHẨM</td>

  </tr>  
    
  <tr bgcolor="#FFFFFF">

    <td width="250" style="padding-left:80px" height="30">Tên nhóm sản phẩm:</td>

    <td width="485">

    <input type="text" name="ten" style="width:240px" value="<?php echo $data['tennhom']; ?>" />
	
	</td>

  </tr> 
	
  <tr>

  	<td bgcolor="#2d94ff" align="center" colspan="2" height="35">

    <input name="" type="submit" value="Sửa" class="button" >

    <input name="" type="reset" value="Xóa trắng" class="button">    

    </td>

  </tr>
  </form>

</table>