<?php
	session_start();
	$_SESSION['giohang'];
	
	if(isset($_POST['ok']))
		{
		echo"<pre>";
		
			foreach($_POST['qty'] as $key=>$val)
					{
						$_SESSION['giohang'][$key]['qty']=$val;
						
					}
					
		}
		header("location:giohangcuaban.php");

?>