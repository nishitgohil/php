<?php
    // $age = 75;

    // if($age >=70){
    //     echo "you are too old to enter this site";
    // }
    // elseif ($age >= 18){
    //     echo "you may enter this site";
    // }
    // elseif($age == 5){
    //     echo "you were just born";
    // }
    // else{
    //     echo "you must be 18+ to enter.";
    // }

    // $age = false;

    // if($age){
    //     echo "you are too old to enter this site";
    // }
    // else{
    //     echo "you must be 18+ to enter.";
    // }

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "you made \${$weekly_pay} this week";

?>