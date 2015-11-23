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
	<title>Add Tours</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php 
				if (isset($_POST['submit'])) {
					$errors=array();
					
					if (empty($_POST['tourname'])) {
						$errors['tourname']="Vui lòng nhập tên tour muốn thêm !";
					}else{
						$tourname=$_POST['tourname'];
					}
					if (isset($_POST['tourcat'])) {
						$tourCat=$_POST['tourcat'];
					}
					if (isset($_POST['tourlocate'])) {
						$tourLocate=$_POST['tourlocate'];
					}
					if (empty($_POST['tourprice'])) {
						$errors['tourprice']="Vui lòng nhập giá của tour !";
					}else{
						$tourprice=$_POST['tourprice'];
					}
					if (empty($_POST['touramount'])) {
						$errors['touramount']="Vui lòng nhập số lượng người tham gia tour !";
					}else{
						$touramount=$_POST['touramount'];
					}
					if (empty($_POST['tourdescription'])) {
						$errors['tourdescription']="Vui lòng giới thiệu đôi chút về tour bạn thêm !";
					}else{
						$tourdescription=$_POST['tourdescription'];
					}
				
					if (empty($errors)) {
						require_once 'process/tour.class.php';
						$addtour=new tour;
						$addtour->set_tourName($tourname);
						$addtour->set_tourPrice($tourprice);
						$addtour->set_tourAmount($touramount);
						$addtour->set_Description($tourdescription);
						if ($addtour->check_Exist()==false) {
							if ($addtour->add_Tour($_SESSION['user_id'],$tourLocate,$tourCat)==false) {
								$errors['fail']="string";
							}else{
								$errors['success']="Thêm Tour thành công !";
							}
					}else{
						$errors['exist']="TOur Name exist";
					}
						}
						
				}
			 ?>
	<div class=" row container">
	<div class="col-sm-3"></div>
		<div id="register" class="form-group col-sm-6 col-xs-12 col-sm-offset-3">
			<div class="row">
				<div class="col-sm-12 ">
					<h2 class="text-center">Add Tours</h2>
				</div>
			</div>
	
			<form action="" method="post">
				<div class="row">
					<div class="col-sm-3 ">
						<label for="tourname" >Tour name</label>
					</div>
					<div class="col-sm-9">
						<input type="text" name="tourname" class="form-control" id="tourname" placeholder="Tam giác mạch, Y tý, Cam Ranh.....">
						<?php 
							if (isset($errors['tourname'])) {
								echo "<span class='error'>{$errors['tourname']}</span>";
							}
							if (isset($errors['exist'])) {
								echo "<span class='error'>{$errors['exist']}</span>";
							}
					 	?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<label for="cat">Categories Tour</label>
					</div>
			
					<div class="col-sm-9 ">
						<select name="tourcat" id="" class="form-control">
							<?php 
								require_once 'process/categories.class.php';
								$showCat=new categories;
								if ($showCat->show_Categories()==0) {
									echo "string";
								}else{
									$data=$showCat->show_Categories();
								foreach ($data as $value) {
									$cat_Id=$value['cat_id'];
									$cat_name=$value['cat_name'];
									echo "<option value='$cat_Id'>$cat_name</option>
										";
									}
								}
							 ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<label for="cat">Locate Tour</label>
					</div>
					<div class="col-sm-9">
						<select name="tourlocate" id="" class="form-control">
							<?php 
								require_once 'process/locate.class.php';
								$showLocate=new locate;
								$data1=$showLocate->show_Locate();
								//echo print_r($data1);
								foreach ($data1 as  $locate) {
										$locateId=$locate['locate_id'];
										$locateName=$locate['locate_name'];
									echo "<option value='$locateId' >$locateName</option>
										";
								}
							 ?>
						</select>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-3">
						<label for="" >Tour Price</label>
					</div>
					<div class="col-sm-9">
						<input type="number" name="tourprice" class="form-control" id="" placeholder="1000000 VN đồng....">
						<?php 
							if (isset($errors['tourprice'])) {
								echo "<span class='error'>{$errors['tourprice']}</span>";
							}
					 	?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<label for="" >Tour Amount</label>
					</div>
					<div class="col-sm-9">
						<input type="number" name="touramount" class="form-control" id="" placeholder="100....">
						<?php 
							if (isset($errors['tourprice'])) {
								echo "<span class='error'>{$errors['tourprice']}</span>";
							}
					 	?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<label for="" >Tour Description</label>
					</div>
					<div class="col-sm-9">
						<textarea name="tourdescription" id="" cols="30" class="form-control" rows="10"></textarea>
						<?php 
							if (isset($errors['tourdescription'])) {
								echo "<span class='error'>{$errors['tourdescription']}</span>";
							}
					 	?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3 col-sm-offset-3">
						<button type="submit" name="submit" class="form-control btn btn-success">Add Tour</button>
						<?php 
							if (isset($errors['success'])) {
								echo "<span class='success text-center'>{$errors['success']}</span>";
							}
							
						 ?>
					</div>
				</div>
				
			</form>
		</div>
	</div>

	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
	
</body>
</html>