<?php 
	require("../session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
  <meta charset="utf-8">
  <link rel="shortcut icon"  href='../assets/images/<?php echo $sicon;?>.png'>
	<!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../assets/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/theme.css" rel="stylesheet">
    <link href="../assets/css/signin.css" rel="stylesheet">
    <style type="text/css">
      body{background: url("../assets/images/bg-body.jpg") repeat;}
      a:hover {
        text-decoration: none;
      }
    </style>
<script>
  function xacnhan(){
    if(!window.confirm("Bạn có muốn xóa không ?")){
      return false;
    }
  }
</script>
</head>
<body>
<body role="document">
  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Hello Sir, <?php echo $_SESSION['ses_username'] ?></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../users/manage.php">Manage</a></li>
          <li><a href="../../index.php">Home</a></li>
          <li><a href="../../contact.php">Contact</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>

          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>