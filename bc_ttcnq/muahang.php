<?php
session_start();
if(mysql_connect("localhost", "root", ""))
mysql_select_db("baocao_web");
else 
echo mysql_error();

?>
<style>
	#nd
		{
			margin:auto;
			padding:auto;
			width:960px;
			height:650px;
			background:#F5F5F5;
		}
</style>

<meta charset='utf8'>
<h2 align="center" style="color:red;font-weight:bold;line-height:150px;width:960px;margin:auto;background:#FFFFE0; font-style:italic;height:150px;border:1px #DCDCDC solid" > 
	Chúc mừng bạn, bạn đã mua hàng thành công,chúng tôi sẽ sớm giao tới cho bạn!
</h2>
<div id="nd">
<h3 style="padding-left:100px;padding-top:50px;color:red">-Thông Tin Người Dùng:</H3>
			<?php
				$user=$_SESSION['user'];
				$sql="select hoten,diachi,email,dienthoai from thanhvien where user='$user'";
				$query=mysql_query($sql);
				$data=mysql_fetch_assoc($query);
				echo "<p  style='padding-left:150px;'>".$data['hoten']."<br/>";
				echo $data['email']."</p>";
				
			?>
<h3 style="padding-left:100px;color:red;">-Thông tin sản phẩm:</h3>

<?php
		if(isset($_SESSION['giohang']) && $_SESSION['giohang']!=null)
			{	
				echo"<table width='750px' border='1'align='center'>";
				echo"<tr>";
				echo"<td>TênSản phẩm</td>";
				echo"<td>Hình ảnh</td>";
				echo"<td>Giá tiền</td>";
				echo"<td>Số lượng</td>";
				echo"<td>Thành tiền</td>";
		
				echo"<tr>";
			
					foreach($_SESSION['giohang'] as $item)
							{
								echo"<tr>";
								echo"<td>$item[id]</td>";
								echo"<td><img src='images/$item[hinh]' width='150px' height='200px'/></td>";
								
								echo"<td>".number_format($item['gia'],3) ."VND</td>";
								echo"<td>$item[qty]</td>";
								echo"<td> ".number_format($item['qty']*$item['gia']). "VND</td>";
							
							
								echo"</tr>";
								

							}
					
							
				echo"</table>";
			}
			else{};
			
				echo"<p align='center'><a href='index.php' > Trở về đầu trang chủ</a></p>";		
				unset($_SESSION['giohang']);
			
			
?>

</div>
