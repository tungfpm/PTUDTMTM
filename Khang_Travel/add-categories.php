<?php 
	session_start();
	require_once 'process/user.class.php';
	$isAdmin=new user();
	$isAdmin->check_Admin();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Categories</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<header>
		<h2 class="text-center">Add Categories</h2>
	</header>
	<section>
	<?php 
		if (isset($_POST['submit'])) {
			$errors=array();
			if (empty($_POST['name'])) {
				$errors['name']="Vui lòng nhập tên Categories muốn thêm !";
			}else{
				$catName=$_POST['name'];
			}
			if (empty($_POST['description'])) {
				$errors['description']="Vui lòng nhập mô tả Categories muốn thêm !";
			}else{
				$catDescription=$_POST['description'];
			}
			//echo print_r($errors);
			if (empty($errors)) {
				require_once 'process/categories.class.php';
				$addCat=new categories;
				$addCat->set_CatName($catName);
				$addCat->set_CatDescription($catDescription);
				if ($addCat->check_Exist()==false) {
					if ($addCat->add_Categories($_SESSION['user_id'])==false) {
						$errors['fail']="Thêm thất bại";
						
					}else{
						$errors['success']="Thêm thành công !";
					}
				}else{
					$errors['exist']="Categories name exist !";
				}
				
			}
		}
	 ?>
		<div class="container form-group">
			<div class="row">
				<div class="col-sm-3">
					
				</div>
				<div class="col-sm-6">
					<form action="" method="post">
						<fieldset>
							<div class="row">
								<div class="col-sm-4">
									<label for="" >Categories Name</label>
								</div>
								<div class="col-sm-8">
									<input type="text" name="name" class="form-control form-group"  placeholder="">
										<?php 
											if (isset($errors['name'])) {
												echo "<span class='error text-center'>{$errors['name']}</span>";
											}
											if (isset($errors['exist'])) {
												echo "<span class='error text-center'>{$errors['exist']}</span>";
											}
							 			?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label for="">Categories Description</label>
								</div>
								<div class="col-sm-8">
								<textarea name="description" id="" cols="30" rows="10" class="form-control form-group"></textarea>
									
										<?php 
											if (isset($errors['description'])) {
												echo "<span class='error  text-center'>{$errors['description']}</span>";
											}
							 			?>
								</div>
							</div>
		
							<div class="row">
								<div class="col-sm-4">
									<label for=""></label>
								</div>
								<div class="col-sm-8">
									<button type="submit" name="submit" class="btn btn-success form-control">Add Categories</button>
									<?php 
										if (isset($errors['success'])) {
										echo "<span class='success text-center'>{$errors['success']}</span>";
										}
									 ?>
								</div>
							</div>
							
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>