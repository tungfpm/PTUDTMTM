<script src="../js/tiny_mce/tiny_mce.js" language="javascript" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
		tinyMCE.init({
				mode : "textareas",
				elements : "ajaxfilemanager",
				theme : "advanced",
				plugins : "table,advhr,advimage,advlink,flash,paste,fullscreen,noneditable,contextmenu",
				theme_advanced_buttons1_add_before : "newdocument,separator",
				theme_advanced_buttons1_add : "fontselect,fontsizeselect",
				theme_advanced_buttons2_add : "separator,forecolor,backcolor,liststyle",
				theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,",
				theme_advanced_buttons3_add_before : "tablecontrols,separator",
				theme_advanced_buttons3_add : "flash,advhr,separator,fullscreen",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				extended_valid_elements : "hr[class|width|size|noshade]",
				file_browser_callback : "ajaxfilemanager",
				paste_use_dialog : false,
				theme_advanced_resizing : true,
				theme_advanced_resize_horizontal : true,
				apply_source_formatting : true,
				force_br_newlines : true,
				force_p_newlines : false,	
				relative_urls : true
			});
	
			function ajaxfilemanager(field_name, url, type, win) {
				var ajaxfilemanagerurl = "../../../../jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
				switch (type) {
					case "image":
						break;
					case "media":
						break;
					case "flash": 
						break;
					case "file":
						break;
					default:
						return false;
				}
				var fileBrowserWindow = new Array();
				fileBrowserWindow["file"] = ajaxfilemanagerurl;
				fileBrowserWindow["title"] = "Ajax File Manager";
				fileBrowserWindow["width"] = "782";
				fileBrowserWindow["height"] = "440";
				fileBrowserWindow["close_previous"] = "no";
				tinyMCE.openWindow(fileBrowserWindow, {
				  window : win,
				  input : field_name,
				  resizable : "yes",
				  inline : "yes",
				  editor_id : tinyMCE.getWindowArg("editor_id")
				});
				
				return false;
			}
	</script>

<table width="735" border="0" cellspacing="0" cellpadding="0">
<form method="post" action=index.php?controller=sanpham&task=capnhatsanpham&id=<?php echo $data['id'];?>>
  <tr>

    <td colspan="2" class="tieude" align="center">SỬA SẢN PHẨM</td>

  </tr>  
  <tr>

    <td style="padding-left:80px" height="30">Loại sản phẩm:</td>

    <td><input type="number" name="loaisp" value="<?php echo $data['id_loai'];?>" style="width:240px"></td>

  </tr>
  <tr>

    <td style="padding-left:80px" height="30">Tên sản phẩm:</td>

    <td><input type="text" name="tensp" value="<?php echo $data['tensp'];?>" style="width:240px"></td>

  </tr>

  <tr bgcolor="#FFFFFF">

    <td style="padding-left:80px" height="30" colspan="2">Mô tả:</td>   

  </tr>

  <tr>

  	<td colspan="2" style="padding-left: 50px">

    <textarea name="mota" style="width:650px; height:300px;" value="<?php echo $data['mota'];?>" ></textarea>

    </td>

  </tr>

  <tr>

    <td style="padding-left:80px" height="30">Hình ảnh:</td>

    <td><input name="file_up" value="<?php echo $data['hinh'];?>"  type="text" size="30"></td>

  </tr>

  <tr bgcolor="#FFFFFF">

    <td style="padding-left:80px" height="30">Giá:</td>

    <td><input name="gia" type="numbert" value="<?php echo $data['gia'];?>" maxlength="20" style="width:240px"></td>

  </tr>
  
    <tr bgcolor="#FFFFFF">

    <td style="padding-left:80px" height="30">Giá khuyến mại:</td>

    <td><input name="giakm" type="number" value="<?php echo $data['giakm'];?>" maxlength="20" style="width:240px"></td>

  </tr>
  
    <tr bgcolor="#FFFFFF">

    <td style="padding-left:80px" height="30">Bảo hành:</td>

    <td><input name="baohanh" type="number" value="<?php echo $data['baohanh'];?>" maxlength="20" style="width:240px"</td>

  </tr>
  

  <tr>

    <td style="padding-left:80px" height="30">Ghi chú:</td>

    <td>   

    <select name="ghichu" style="width:240x">

    <option value="chonmenu">----------Chọn----------</option>

  	<option value="new">Mặt hàng mới</option>
	
	<option value="khuyenmai">Khuyến mại</option>

    </select>

    </td>

  </tr>  
  <tr>

  	<td bgcolor="#2d94ff" align="center" colspan="2" height="35">

    <input name="" type="submit" value="Lưu" class="button" onmouseover="style.background='url(../images/button-5.gif)'" onmouseout="style.background='url(../images/button-4.gif)'">

    <input name="" type="reset" value="Xóa trắng" class="button" onmouseover="style.background='url(../images/button-5.gif)'" onmouseout="style.background='url(../images/button-4.gif)'">    

    </td>

  </tr>

  </form>

</table>

