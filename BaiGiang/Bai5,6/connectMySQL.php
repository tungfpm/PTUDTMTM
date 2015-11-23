<?php
$con = mysqli_connect("localhost","tungfpm","tungzpm");
if ( !$con ) {
//Không kết nối được, thoát ra và báo lỗi
echo "<h1>Connect Faild</h1>";
die("không nết nối được vào MySQL server");
} else {
	echo "<h1>Connect Success</h1>";
} //end if

//đóng kết nối
// mysql_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Connect MySQL</title>
</head>
<body>

</body>
</html>