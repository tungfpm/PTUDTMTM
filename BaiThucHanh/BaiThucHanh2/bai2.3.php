<!DOCTYPE html>
<html>
<head>
	<title>Bài 2.3</title>
</head>
<body>
<form action="bai2.3.php" name="Tungfpm" method="post">
	<h3>Tìm ước chung lơn nhất, bội chung nhỏ nhất của 2 số</h3>
	<label>Nhập số a : </label><input type="text" name="a"><br>
	<label>Nhập số b : </label><input type="text" name="b"><br>
	<input type="submit" name="submit" value="Find">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if ($_POST['a'] != "" && $_POST['b'] != "" ){
    	if (is_numeric($_POST['a']) && is_numeric($_POST['b'])){
    		$a = $_POST['a'];
    		$b = $_POST['b'];
    		if ($a > 0 && $b > 0) {
    			while (($c = $a % $b) != 0) {
	    			$a = $b;
	    			$b = $c;
	    		}
	    		echo "UCLN ( ".$_POST['a']." , ".$_POST["b"] ." ) = ".$b."<br>";
	    		echo "BCNN ( ".$_POST['a']." , ".$_POST["b"] ." ) = ".($_POST['a']*$_POST['b'])/$b;
    		} else {
    			echo "a, b phải lớn hơn 0";
    		}
    	}  else { 
    		echo "a, b phải là số thì mới tìm được UCLN, BCNN";
    	}
    } else {
        echo "Vui lòng nhập vào đầy đủ hai số a, b ";
    }
}
?>