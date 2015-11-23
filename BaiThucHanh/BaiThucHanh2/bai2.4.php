<!DOCTYPE html>
<html>
<head>
	<title>Bài 2.4</title>
</head>
<body>
<form action="bai2.4.php" name="Tungfpm" method="post">
	<h3>Kiểm tra số nguyên tố</h3>
	<label>Nhập vào 1 số</label>
	<input type="text" name="n">
	<input type="submit" name="submit" value="Check Prime number">	
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if ($_POST['n'] != ""){
    	if (is_numeric($_POST['n'])){
    		$n = $_POST['n'];
    		$count = 0;
    		for ($i=2; $i <= $n ; $i++) { 
    			if ($n % $i == 0) {
    				$count++;
    			}
    		}
    		if ($count == 1) {
    			echo "<br>$n là số nguyên tố";
    		} else{
    			echo "<br>$n không phải là số nguyên tố";
    		}
    	}  else { 
    		echo "Phải là số thì mới kiểm tra nguyên tố dc";
    	}
    } else {
        echo "Vui lòng nhập số vào";
    }
}
?>