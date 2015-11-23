<?php
    echo "Cho day so tu 1 -> 30 <br> ";

    echo "Cac so le trong day la : ";
    for($i = 1; $i <= 30; $i++){
        if($i % 2 != 0){
            echo "$i  ";
        }
    }

    echo "<br>Cac so nguyen to trong day la : ";
    for($i = 1; $i <= 30; $i++){
        $dem = 0;
        for($j = 2; $j <= sqrt($i); $j++){
            if($i % $j == 0){
                $dem++;
            }
        }
        if($dem == 1){
            echo "$i ";
        }
    }

    echo "<br>Cac so hoan hao trong day la : ";
    for($i = 1; $i <= 30; $i++){
        $tonguoc = 0;
        for($j = 1; $j < $i; $j++){
            if($i % $j == 0){
                $tonguoc += $j;
            }
        }
        if($tonguoc == $i){
            echo "$i ";
        }
    }
 ?>