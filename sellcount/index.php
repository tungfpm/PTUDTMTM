<html>
<head>
	<title>Sellcount</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper">
<?php
	$l = "Login";
	include('templates/top.php');
?>
<!-- Start content -->
	<div class="content">
		<div class="sale">
			<img src="images/sale.jpg" id="sale">
		</div>	
		<div class="dashed"></div>
		<ul class="shirts">
			<li><img src="images/shirt-red.jpg"></li>	
			<li><img src="images/shirt-orange.jpg"></li>
			<li><img src="images/shirt-green.jpg"></li>
			<li><img src="images/shirt-blue.jpg"></li>
		</ul>
		<div class="dashed">
			<center><a class="button" href="shop.html">Shop here!</a></center>
		</div>
	</div>
<!-- End content -->
<?php
	include('templates/bottom.php');
?>


</div>
</body>
</html>