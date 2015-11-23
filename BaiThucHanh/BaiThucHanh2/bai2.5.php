<!DOCTYPE html>
<html>
<head>
	<title>Bài 2.5</title>
</head>
<body>
<form action="bai2.5.php" name="Tungfpm" method="post">
	<h3>Tìm số hạng thứ n của dãy Fibonaci</h3>
	<label>Nhập n : </label>
	<input type="text" name="n">
	<input type="submit" name="submit" value="Find">
</form>
</body>
</html>

<?php
function fibonaci($n){
    if ($n == 1 || $n == 2){ 
    	return 1; 
    } else {
    	return (fibonaci($n-2)+fibonaci($n-1));
    }
}
if(isset($_POST['submit'])){
    if ($_POST['n'] != ""){
    	if (is_numeric($_POST['n'])){
    	$n = $_POST['n'];
    		if ($n > 0) {
    			echo "Số hạng thứ $n của dãy Fibonaci : " .fibonaci($n);
    			echo "<br>Dãy Fibonaci : ";  
    			for ($i=1; $i <= 20 ; $i++) { 
    				echo fibonaci($i)." ";
    			}
    			echo " . . .";
    		} else {
    			echo "n phải là số dương";
    		}
    	}  else { 
    		echo "n phải là số";
    	}
	} else {
    	echo "Vui lòng nhập n";
	}
}
?>