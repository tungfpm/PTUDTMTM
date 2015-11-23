<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

</body>
</html>
<?php
  session_start();
	echo "Tên người dùng : "	.$_SESSION['ses_username'];
	echo "<br/>";
	echo "Email : " .$_SESSION['ses_email'];
	
?>