<?php
    $left = "Sign In"; 
    $linkleft = "process/users/signin.php"; 
    $right = "Sign Up"; 
    $linkright = "process/users/signup.php"; 
    session_start();
    if(isset($_SESSION['ses_level'])){
        $left = $_SESSION['ses_username'];
        $linkleft = "process/users/manage.php";
        $right = "sign out";
        $linkright = "process/users/logout.php";
    }
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
    <link rel="shortcut icon"  href="process/assets/images/smile_grin_48.png">
	<link rel="stylesheet" type="text/css" href="process/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="process/assets/css/style.css">
</head>
<body>
<div class="wrapper">
<div class="header-top"></div>
    <div class="container ">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 bgimage">
                <div class="col-xs-1 connect">
                    <a href="https://www.facebook.com/tungfpm" target="_blank" id="fb">
                        <div class="bgfb-inside"></div>
                    </a>
                </div>
                <div class="col-xs-1 col-xs-offset-1 connect">
                    <a href="https://twitter.com/Tungfpm" target="_blank" id="tw">
                        <div class="bgtw-inside"></div>
                    </a>
                </div>
                <div class="col-xs-1 col-xs-offset-2 connect">
                    <a href="https://vimeo.com/tungfpm" target="_blank" id="vm">
                        <div class="bgtw-inside"></div>
                    </a>
                </div>

                <div class="col-xs-5 col-xs-offset-7 col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 infor">
                    <a href="<?php echo $linkleft ?>"><?php echo $left ?></a>|
                    <a href="<?php echo $linkright ?>"><?php echo $right ?></a>
                </div>

                <center>
                    <ul class="menu container-fluid">
                        <li><a href="index.php" <?php if ($sl == 1) {echo 'id="selected"';} ?>>Home</a></li>
                        <li><a href="about.php" <?php if ($sl == 2) {echo 'id="selected"';} ?>>About</a></li>
                        <li><a href="show.php" <?php if ($sl == 3) {echo 'id="selected"';} ?>>Show</a></li>
                        <li><a href="shop.php" <?php if ($sl == 4) {echo 'id="selected"';} ?>>Shop</a></li>
                        <li><a href="contact.php" <?php if ($sl == 5) {echo 'id="selected"';} ?>>Contact Us</a></li>
                    </ul>
                </center>
                <div class="bgimage-inside">
                </div>
            </div>
        </div>