<?php session_start();?>
<div align="center">


<meta charset='utf8'>
<h3>Thông tin giỏ hàng</h3>
<style>
	td
		{
			font:12px;
			text-align:center;
			border:1px solid #0099FF;
		}
	.title
			{
				background:#0099FF;
				color:#FFFFFF;
				font-weight:bold;
				
			}
	.link{
		
				color:#0099FF;
			
			
		}
		.link:hover{
					color:#A52A2A;
				
					}
	
</style>

<?php
		if(isset($_SESSION['giohang']) && $_SESSION['giohang']!=null)
			{	
				echo"<form action='suagiohang.php' method='post'>";
				echo"<table width='750px' border='1'align='center'>";
				echo"<tr>";
				echo"<td class='title'>TênSản phẩm</td>";
				echo"<td class='title'>Hình ảnh</td>";
				echo"<td class='title'>Giá tiền</td>";
				echo"<td class='title'>Số lượng</td>";
				echo"<td class='title'>Thành tiền</td>";
				echo"<td class='title'>Xoa</td>";
				echo"<tr>";
			$tongtientt=0;
					foreach($_SESSION['giohang'] as $item)
							{
								$tt=$item['qty']*$item['gia'];
								echo"<tr>";
								echo"<td>$item[tensp]</td>";
								echo"<td><img src='images/$item[hinh]' width='150px' height='200px'/></td>";
								
								echo"<td>".number_format($item['gia'],3) ."VND</td>";
								echo"<td><input type='text' name='qty[".$item['id']."]' value='$item[qty]'style='text-align:center'/></td>";
								echo"<td> ".number_format($tt). "VND</td>";
								echo"<td class='link'><a href='deletegiohang.php?id=$item[id]'>Xoa</td>";
							
								echo"</tr>";
								
								$tongtientt +=$tt;

							}
				echo"<tr>";
				echo"<td colspan='6'>";	
				echo"<p align='right' style='color:red; font-weight:bold'>";
					echo "Tổng số tiền thanh toán : ".number_format($tongtientt)."VND";
					echo"</p>";
				echo"</td>";
				echo"</tr>";
				echo"</table>";
					echo"<p align='center'>";
					echo"<a href='index.php'>Mua them</a>"."<span style='margin-left:50px'></span>";;
					echo"<input type='submit' value='Sửa số lượng' name='ok'/>"."<span style='margin-left:50px'></span>";
				echo"<a href='ktradangnhap.php'>Thanh Toán</a>";
					echo"</p>";
					
				echo"</form>";
				
			}
			else
			{
				echo"chua co san pham nao trong gio";
			}
			?>
			
		</div>