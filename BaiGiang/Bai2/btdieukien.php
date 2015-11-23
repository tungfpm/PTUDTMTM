<?php
    $diem = 8.4;
    $thu = 7;
    if($diem >= 8.5 && $diem <= 10){
        echo "Diem A";
    } elseif ($diem >= 7.0 && $diem < 8.5){
        echo "Diem B";
    }
    elseif ($diem >= 5.5 && $diem < 7.0){
        echo "Diem C";
    }
    elseif ($diem >= 4.0 && $diem < 5.5){
        echo "Diem D";
    }
    elseif ($diem >= 0 && $diem < 4.0){
        echo "Diem F";
    } else {
        echo "Khong phai diem he so 10";
    }

    echo "<br><br><br>" ;

    switch($thu){
        case 1 :
            echo "Sunday";
            break;
        case 2 :
            echo "Monday";
            break;
        case 3 :
            echo "Tuesday";
            break;
        case 4 :
            echo "Wednesday";
            break;
        case 5 :
            echo "Thursday";
            break;
        case 6 :
            echo "Friday";
            break;
        case 7 :
            echo "Saturday";
            break;
        default :
            echo "Not a day of the week";

    }
?>