<!DOCTYPE html>
<html>
<head>
	<title>Bài 2.8</title>
</head>
<body>
<form action="bai2.8.php" name="Tungfpm" method="post">
	<h3>Tính biểu thức: S = 1-2+3-4+…+(2n-1)-2n</h3>
	<label>Nhập vào n : </label>
	<input type="text" name="n">
	<input type="submit" name="submit" value="Compute">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if ($_POST['n'] != ""){
    	if (is_numeric($_POST['n'])){
    	$n = $_POST['n'];
    		if ($n > 0) {
            $s = 0;
            echo "<br>S = ";
    			for ($i=2; $i <= $n ; $i++) { 
                    $s += pow(-1,$i)*($i-1);
                    echo pow(-1,$i)*($i-1)." ";
                    if (pow(-1,$i) < 0) {
                        echo " + ";
                    }
                }		
                echo " = $s";
    		} else {
    			echo "N phải lớn hơn 0";
    		}
    	}  else { 
    		echo "N phải là số";
    	}
	} else {
    	echo "Vui lòng nhập N";
	}
}
?>