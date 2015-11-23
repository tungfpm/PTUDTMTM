<html>
<head>
    <title>Kiem tra nguyen to</title>
</head>
<body>
<form action = "test.php" method = "POST">
    n: <input type="text" name = "n" /></br>
    <input type="submit" name ="ok" value = "Ket Qua" />
</form>
<?php
function ktnto($n){
    if ($n<2) return false;
    for ($i=2; $i<=sqrt($n); $i++){
        if ($n%$i==0) return false;
    }
    return true;
}

if(isset($_POST['ok'])){
    $n = $_POST['n'];
    if (ktnto($n)){
        echo "$n la so nguyen to";
    }else{
        echo "$n khong la so nguyen to";
    }
}
?>
</body>
</html>