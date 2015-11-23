	

<?php
session_start();
if(mysql_connect("localhost", "root", ""))
mysql_select_db("baocao_web");
else 
echo mysql_error();

?>
<?php
require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$sanpham = $modelsanpham -> laydssp();
		
$id=$_GET['id'];


$newsanpham=array();
foreach($sanpham as $item)
		{
			$newsanpham[$item['id']]=$item;
			
		}

		
	if(!isset($_SESSION['giohang']) || $_SESSION['giohang']==null)
		{	
			
			$newsanpham[$id]['qty']=1;
			$_SESSION['giohang'][$id]=$newsanpham[$id];	
			
			
		}
	else
	{

	
		if(array_key_exists($id,$_SESSION['giohang']))
			{
				$_SESSION['giohang'][$id]['qty']+=1;
				
			}
		else
			{
				$newsanpham[$id]['qty']=1;
				$_SESSION['giohang'][$id]=$newsanpham[$id];
				
			}
	}

	/*for($i=0;$i<=30;$i++)
	{*/
	//unset($_SESSION['giohang']['0']);
//}
//echo"<pre>";
//print_r($_SESSION['giohang']);
/*if($_SESSION['ht']!=null)
			{*/
				header("location:giohangcuaban.php");
		/*	}
else
{
	header("location:trangchu.php");
}*/
	?>