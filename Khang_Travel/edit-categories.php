<?php 
require_once 'includes/header.admin.php';
 ?>

		<div id="content">
			<div id="feature1">
				<div class="row">
					<div class="col-sm-12">
						<h2>Edit Categories</h2>
						<div class="row">
							<div class="col-sm-3">
								<?php 
									if (isset($_POST['submit'])) {
										$errors=array();
										if (empty($_POST['catname'])) {
											$errors['catname']="Please typing Categories Name !";
										}else{
											$catName=$_POST['catname'];
										}
										if (empty($_POST['catdescription'])) {
											$errors['catdescription']="Please typing Categories Description !";
										}else{
											$catDescription=$_POST['catdescription'];
										}
										if (empty($errors)) {
											require_once 'process/categories.class.php';
											$editCat=new categories;
											$editCat->set_CatName($catName);
											$editCat->set_CatDescription($catDescription);
											if ($editCat->check_Edit($_GET['cat-id'])==false) {
												if ($editCat->edit_Categories($_GET['cat-id'],$_SESSION['user_id'])==false) {
													$errors['fail']="Chỉnh sửa không thành công !";
												}else{
													$errors['success']="Edit Success !";
												}
											}else{
												$errors['exist']=" Categories name had exist !";
											}
										}
									}
								 ?>
							</div>
							<div class="col-sm-6">
								<form action="" method="POST">
									<div class="row">
										<div class="col-sm-3">
											<label for="">Categories Name</label>
										</div>
										<div class="col-sm-9">
											<input type="text" name="catname" class="form-control form-group">
											<?php 
												if (isset($errors['exist'])) {
													echo "<span class='error  text-center'>{$errors['exist']}</span>";
												}
												if (isset($errors['catname'])) {
													echo "<span class='error  text-center'>{$errors['catname']}</span>";
												}
											 ?>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<label for="">Categories Description</label>
										</div>
										<div class="col-sm-9">
											<textarea name="catdescription" class="form-control form-group
											form-group" id="" cols="30" rows="10"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											
										</div>
										<div class="col-sm-9">
											<button type="submit" name="submit" class="btn btn-success form-group">Edit Categories</button>
											<?php 
												if (isset($errors['success'])) {
													echo "<p class='success text-center'>{$errors['success']}</p>";
												}
												if (isset($errors['fail'])) {
													echo "<p class='error text-center'>{$errors['fail']}</p>";
												}
											?>
										</div>
									</div>
								</form>
							</div>
							<div class="col-sm-3">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	
