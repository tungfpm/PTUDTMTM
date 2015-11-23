<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="shortcut icon"  href="../assets/images/lock_open_48.png">
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">
    <style type="text/css">
		body{background: url("../assets/images/bg-body.jpg") repeat;}
    </style>
  </head>
  <body>
  <div class="header-top"></div>
	<div class="container">
	  <form class="form-signin" action="signup.php" method="post">
	    <h2 class="form-signin-heading">Please sign up</h2>
	    <label for="inputUsername" class="sr-only">Username</label>
	    <input type="text"  class="form-control" placeholder="Username" name="fuser" required autofocus>
	    <br>
	    <label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="fpass" required>
	    <br>
	    <label for="inputPassword" class="sr-only">Re-Password</label>
	    <input type="password" id="inputPassword" class="form-control" placeholder="Re-Password" name="fpass2" required>
	    <br>
	    <label for="inputEmail" class="sr-only">Email</label>
	    <input type="email" class="form-control" placeholder="Email" name="femail" required>
	    <center>
	    	<?php
	    	echo "<br/>";
	    	echo "<font color='red'>";
	    		require("user.php");
				session_start();
				$u = "";
				$p = "";
				$e = "";
				if (isset($_POST['submit'])){
					if($_POST['fuser'] == NULL) {
						echo "Tên đăng nhập trống<br />";
					}else{
						$u=$_POST['fuser'];
					}
					if ($_POST['fpass'] == NULL) {
						echo "Mật khẩu trống<br />";
					} else {
						if($_POST['fpass'] != $_POST['fpass2']){
							echo "Mật khẩu không trùng khớp";
						} else {
							$p = ($_POST['fpass']);
						}
					}
					if($_POST['femail'] == NULL) {
						echo "Email trống<br />";
					}else{
						$e=$_POST['femail'];
					}

					$l= 1;

					if($u != "" && $p != "" && $e != "" && $l){
						$user = new user;
							$user->set_username($u);
							$user->set_password($p);
							$user->set_email($e);
							$user->set_level($l);

							if ($user->check_username()) {
								$user->insert_user();
								$_SESSION['ses_username'] = $user->get_username();
								$_SESSION['ses_password'] = $user->get_password();
								$_SESSION['ses_level'] = $user->get_level();
								header("location:regsuccess.php");
							} else {
								echo "Tên đăng nhập đã tồn tại";
							}
					}
				}
			echo "</font>";
			?>
	    </center>
	    <br>
	    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
	  </form>
	</div>
  </body>
</html>

