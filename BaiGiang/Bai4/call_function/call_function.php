<?php
function hello($ten){
	echo "Xin chao $ten";
}
function goodbye(){
	echo "Tam biet";
}
?>
<html>
<head>
	<title>Vi du goi lai ham</title>
</head>
<body>
	<?php
		include("call_func.php");
		echo "Dang test loi";
		hello("ABC");
		goodbye();
	?>
</body>
</html>
