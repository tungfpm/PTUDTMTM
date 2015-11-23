<!DOCTYPE html>


<html>
<head>
    <title>Bai 2.1</title>
</head>

<!-- Giai phuong trinh bac 2 -->

<body>
    <form action="bai2.1.php" name="Tungfpm" method="post">
    <label><h4>Giải phương trình bậc hai</h4></label>
    <label for="A">Nhập hệ số A:</label>
    <input type="text" name="a" /> <br />
    <label for="B">Nhập hệ số B:</label>
    <input type="text" name="b" /> <br />
    <label for="C">Nhập hệ số C:</label>
    <input type="text" name="c" /> <br />
    <input type="submit" name="submit" value="Tính nghiệm"/>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if ($_POST['a'] != "" && $_POST['b'] != "" && $_POST['c'] != "" ){
        if (is_numeric($_POST['a']) && is_numeric($_POST['b']) && is_numeric($_POST['c'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            if ($a == 0){
                echo "Phương trình bậc nhất<br>";
                if ($b == 0){
                    if ($c == 0){echo "Phương trình vô số nghiệm";
               		} else {echo "Phương trình vô nghiệm";}
                } else {echo "Nghiệm duy nhất : " . (-$c / $b);}
            } else {
	            echo "Phương trình bậc hai<br>";
	            $delta = $b*$b-4*$a*$c;
	            if ($delta < 0) {
	                echo "Phương trình vô nghiệm";
	            } else if($delta==0) {
	                if ((-$b/2*$a) != 0) {
	                    echo "Phương trình có nghiệm kép";
	                    echo " x = " . (-$b / 2 * $a) ;
	                } else { echo "Vui lòng nhập lại";}
	            } else {
	                echo "Phương trình có 2 nghiệm <br>";
	                echo " x1 = ".(-$b-sqrt($delta))/(2*$a) ."<br>";
	                echo " x2 = ".(-$b+sqrt($delta))/(2*$a) ."<br>";
	            }
	        }
        } else { echo "A,B,C phải là số !";}
    }else {
        echo "Vui lòng nhập vào đầy đủ các hệ số A,B,C ";
    }
}
?>
