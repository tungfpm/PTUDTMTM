<?php 
require_once 'includes/header.admin.php';
 ?>

		<div id="content">
			<div id="feature1">
			<div class="row">
				<div class="col-sm-12">
					<h2>Add Locate</h2>
					<div class="row">
						<form action="" method="POST">
							<div class="row">
								<div class="col-sm-3">
									<?php 

										if (isset($_POST['submit'])) {
											$errors=array();
											if (empty($_POST['name'])) {
												$errors['name']="Please typing name locate !";
											}else{
												$nameLocate=$_POST['name'];
											}
											if (empty($_POST['description'])) {
												$errors['description']="Please typing description !";
											}else{
												$description=$_POST['description'];
											}
											if (empty($errors)) {
												require_once 'process/locate.class.php';
												$locate=new locate;
												$locate->set_locateName($nameLocate);
												$locate->set_locateDescription($description);
												if ($locate->add_Locate($_SESSION['user_id'])==false) {
													echo "fail";
												}else{
													echo "success";
												}
											}
										}
									 ?>
								</div>
								<div class="col-sm-6">
									<div class="row">
										<div class="col-sm-3">
											<label for="">Locate Name</label>
										</div>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control form-group">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<label for="">Description</label>
										</div>
										<div class="col-sm-9">
											<textarea name="description" class="form-group form-control"id="" cols="30" rows="10"></textarea>
										</div>
									</div>
									<div class="row">
										
										<div class="col-sm-9 col-sm-offset-3">
											<button type="submit" name="submit" class="btn btn-success">Add Locate</button>
										</div>
									</div>

								</div>
								<div class="col-sm-3">
									
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
	
