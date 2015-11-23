<!DOCTYPE html>
<html>
<head>
	<title>Bài 2.7</title>
</head>
<body>
<form action="bai2.7.php" name="Tungfpm" method="post">
	<h3>Tìm các số nguyên tố từ 2 đến N</h3>
	<label>Nhập vào N : </label>
	<input type="text" name="n">
	<input type="submit" name="submit" value="Find">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if ($_POST['n'] != ""){
    	if (is_numeric($_POST['n'])){
    	$n = $_POST['n'];
    		if ($n > 2) {
    			echo "Các số nguyên tố từ 2 đến $n là : <br>";
    			for ($i=2; $i <= $n ; $i++) { 
    				$count = 0;
    			 	for ($j=2; $j <= $i; $j++) { 
    			 		if ($i % $j == 0) {
    			 			$count++;
    			 		}
    			 	}
    			 	if ($count == 1) {
    			 		echo "$i ";
    			 	}
    			}    			
    		} else {
    			echo "N phải lớn hơn 2";
    		}
    	}  else { 
    		echo "N phải là số";
    	}
	} else {
    	echo "Vui lòng nhập N";
	}
}
?>