<?php 
require_once 'includes/header.admin.php';
 ?>

		<div id="content">
			<div id="feature1">
			<div class="row">
			<?php 
				if (isset($_POST['search'])) {
					$errors=array();
					if (empty($_POST['textsearch'])) {
						$errors['keysearch']="Nhap tu muon tim";
					}else{
						$keysearch=$_POST['textsearch'];
					}
				}
			 ?>
				<div class="col-sm-12">
					<h2>Search Tours</h2>
					<div class="row">
						
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
	
