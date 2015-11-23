<!DOCTYPE html>
<html>
<head>
	<title>Open file</title>
</head>
<body>

</body>
</html>
<?php 
	$path = "a.txt";
	$p = fopen($path, "r");
	while (!feof($p)) {
		echo fgets($p)."<br>";
	}
	fclose($p)
?>