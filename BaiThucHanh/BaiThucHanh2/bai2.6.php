<!DOCTYPE html>
<html>
<head>
	<title>Bài 2.6</title>
</head>
<body>
<form action="bai2.6.php" name="Tungfpm" method="post">
	<h3>Tính số lần gấp đối tờ giầy</h3>
	<label>Nhập độ dày tờ giấy ban đầu (mm): </label>
	<input type="text" name="before"><br>
	<label>Nhập độ dày tờ giấy sau gấp ( m ) :  </label>
	<input type="text" name="after"><br>
	<input type="submit" name="submit" value="Compute">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if ($_POST['before'] != "" && $_POST['after'] != "" ){
    	if (is_numeric($_POST['before']) && is_numeric($_POST['after'])){
    		$before = $_POST['before'];
    		$after = $_POST['after'];
    		if ($before > 0 && $after > 0) {
    			$count = 0;
    			for ($i=1; $i < 10000 ; $i++) { 
	    			if ($before*pow(2, $i) >= $after*1000) {
	    				echo "Để gấp một tờ giấy có độ dày $before mm thành tờ giấy có độ dày $after m thì ta cần gấp đôi $i lần";
	    				break;
	    			}
	    		}	
    		} else {
    			echo "Số liệu phải lớn hơn 0";
    		}
    	}  else { 
    		echo "Phải nhập vào số";
    	}
    } else {
        echo "Vui lòng nhập vào đầy đủ hai số trên";
    }
}
?>