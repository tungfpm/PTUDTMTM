<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div id="wapprer">
		<div id="header">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Travel.com</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Tour</a></li>
						<li><a href="#">Cẩm nang du lịch</a></li>
						<!-- <li><a href="#">Giới thiệu</a></li> -->
						<li><a href="#">Liên hệ</a></li>
						<li><a href="#">Hỗ trợ</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Giới thiệu</a></li>
						<?php 
							if (isset($_SESSION['user_id'])) {
								echo "<li><a href='logout.php' title='' class=''>Đăng xuất</a></li>";
							}else{
								echo "<a href='login.php' title='' class='btn btn-success navbar-btn navbar-right '>Đăng nhập</a>";
							}
							if (isset($_SESSION['user_level']) && $_SESSION['user_level']==2) {
								echo "<a href='admin.php' title='' class='btn btn-success navbar-btn navbar-right btn-admin '>Admin</a>";
							}
						 ?>
						
					</ul>
				</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div><!-- #header -->
