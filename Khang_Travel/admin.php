<?php 
	session_start();
	require_once 'process/user.class.php';
	$isAdmin=new user;
	$isAdmin->check_Admin();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<header>
		<h2 class="text-center">Manager</h2>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="row">
					<aside>
						<ul class="list-inline">
							<li><a href="manage-user.php" class="btn btn-primary">Users</a></li>
						</ul>
					</aside>
				</div>
				<div class="row">
					<aside>
						<ul class="list-inline">
							<li><a href="manage-tour.php" class="btn btn-primary">Tours</a></li>
						</ul>
					</aside>
				</div>
				<div class="row">
					<aside>
						<ul class="list-inline">
							<li><a href="manage-categories.php" class="btn btn-primary">Categories</a></li>
						</ul>
					</aside>
				</div>
				<div class="row">
					<aside>
						<ul class="list-inline">
							<li><a href="manage-images.php" class="btn btn-primary">Images</a></li>
						</ul>
					</aside>
				</div>
			</div>
			<div class="col-sm-9">
				
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>