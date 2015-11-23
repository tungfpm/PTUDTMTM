<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link rel="shortcut icon"  href="../assets/images/lock_48.png">
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
	  <form class="form-signin" action="signin.php" method="post">
	    <h2 class="form-signin-heading">Please sign in</h2>
	    <label for="inputEmail" class="sr-only">Username</label>
	    <input type="text"  class="form-control" placeholder="Username" name="fuser" required autofocus>
	    <br>
	    <label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="fpass" required>
	    <center>
	    	<?php
	    		session_start();
				require("user.php");
				if(isset($_POST['submit'])){
						$u = $_POST['fuser'];
						$p = ($_POST['fpass']);
					if($u && $p) {
						$user = new user;
						$user->set_username($u);
						$user->set_password($p);
						$data = $user->check_login();
						if ($data == false) {
							echo "<h4><font color = 'red'>Login Faild. Sign In again !</font></h4>";
						} else {
							$_SESSION['ses_username'] = $data['username'];
							$_SESSION['ses_email'] = $data['email'];
							$_SESSION['ses_level'] = $data['level'];
							if ($_SESSION['ses_level'] != 2) {
								header("location:../../index.php");
								exit();
							} else {
								header("location:manage.php");
								exit();
							}
						}
					}
				}
			?>
	    </center>
	    <br>
	    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
	  </form>
	</div>
  </body>
</html>

