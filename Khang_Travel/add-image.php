	<?php 
require_once 'includes/header.admin.php';
require_once 'process/user.class.php';
	$isAdmin=new user();
	$isAdmin->check_Admin();
 ?>
 		<div id="content">
			<div id="feature1">
				<div class="row">
				<h2>Add Images</h2>
					<div class="col-sm-3">
						<?php 
							if (isset($_POST['submit'])) {
								$errors=array();
								$data=array();
								$data['user_id']=$_SESSION['user_id'];
								
								if (empty($_POST['tour'])) {
									$errors['tour']="please choose tour name !";
								}else{
									$data['tour_id']=$_POST['tour'];
								}
								if (empty($_POST['image-description'])) {
									$errors['description']="please typing !";
								}else{
									$data['image_description']=$_POST['image-description'];
								}
								//echo print_r($errors);
								if (empty($errors)) {
									require_once 'process/image.class.php';
									$im=new image('image-upload');
									$im->setImageExtention(array('jpg','png','jpge', 'tiff', 'gif' ));
									$im->setImageFolder('./files/images/');
									$im->upload();
									$data['image_name']=str_replace('.', '', $im->getImageFolder()).$im->imageName;
									if ($im->add($data)==true) {
										$errors['success']="upload Success !";
									}else{
										$errors['fail']="Upload Fail !";
									}
								}
							}
						 ?>
					</div>
					<form  method="post" enctype="multipart/form-data">
						<div class="col-sm-6 form-group ">
							<div class="row">
								<div class="col-sm-3">
									<label for="">Choose Image</label>
								</div>
								<div class="col-sm-9">
									<input type="file" name="image-upload" id="exampleInputFile" class=" btn btn-lg">
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-3">
									<label for="">Tour</label>
								</div>
								<div class="col-sm-9">
									<select name="tour" id="" class="form-control form-group">
										<?php 
											require_once 'process/tour.class.php';
											$show=new tour;
											if ($show->show_Tour_Mini()==false) {
												$errors['exist']="TOur Not Exist !";
											}else{
												$data=$show->show_Tour_Mini();

												foreach ($data as $value) {
													$tour_Id=$value['tour_id'];
													$tour_Name=$value['tour_name'];
													echo "<option value='$tour_Id'>$tour_Name</option>
													";
												}
											}
										 ?>
									</select>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<label for="">Image Description</label>
									</div>
									<div class="col-sm-9">
										<textarea name="image-description" id="" class=" form-control"></textarea>
										<?php 
											if (isset($errors['description'])) {
												echo "<span class='error  text-center'>{$errors['description']}</span>";
											}
										 ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<label for=""></label>
								</div>
								<div class="col-sm-9">
									<button type="submit" name="submit" class=" form-group btn btn-success">Add Images</button>
									<?php 

									if (isset($errors['success'])) {
									 	echo "<span class='success text-center'>{$errors['success']}</span>";
									 }elseif(isset($errors['fail'])){
									 	echo "<span class='error  text-center'>{$errors['fail']}</span>";
									 }
									  ?>
								</div>
							</div>
						</div>		
					</form>
							
						
					
					<div class="col-sm-3"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	

</body>
</html>
