<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>
<form action="function.php" name="Tungfpm" method="POST">
	<label>Nhập A : </label><input type="text" name="fa">
	<label>Nhập B : </label><input type="text" name="fb">
	<input type="submit" name="submit" value="Run functions">
</form>
</body>
</html>

<?php
	function sum($a,$b) {
		return $a + $b;
	}
	function sub($a,$b){
		return $a - $b;
	}
	function mul($a,$b){
		return $a * $b;
	}
	function div($a,$b){
		if ($b == 0) {
			return "Lỗi ko chia dc cho 0";
		} else {
			return $a / $b;
		}
	}
	function tbc($a,$b){
		if(div($a,$b) == "Lỗi ko chia dc cho 0"){
			return "Không tính được trung bình cộng";
		} else {
			return (sum($a,$b)+sub($a,$b)+mul($a,$b)+div($a,$b))/4;
		}
	}
	function ktngto($a){
		if ($a<2) return false;
		for ($i=2; $i<=sqrt($a); $i++){
			if ($a%$i==0) return false;
		}
		return true;
	}
	function giaithua($a){
		$gt = 1;
		for ($i=1; $i < $a ; $i++) { 
			$gt *= $i;
		}
		return $gt;
	}
	
	if(isset($_POST['submit'])){
		$a = $_POST['fa'];
		$b = $_POST['fb'];
		if($a != "" && $b != ""){
			echo "Tổng = " .sum($a,$b)."<br>";
			echo "Hiệu = " .sub($a,$b)."<br>";
			echo "Tích = " .mul($a,$b)."<br>";
			echo "Thương = " .div($a,$b)."<br>";
			echo "Trung bình cộng của 4 phép toán trên = " .tbc($a,$b)."<br>";
			if (ktngto($a)) {
				echo "$a là số nguyên tố <br>";
			} else {
				echo "$a không là số nguyên tố <br>";
			}
			echo "$b! = " .giaithua($b);
		} else {
			echo "Nhập đầy đủ A và B";
		}
	}
		
?>