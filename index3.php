<?php
    // $temp = 31;
    // $cloudy = true;

    // if($temp < 0 || $temp > 30){
    //     echo "the weather is good.<br>";
    // }
    // else{
    //     echo "the weather is bad.<br>";
    // }

    // if(!$cloudy){
    //     echo "its sunny.";
    // }
    // else{
    //     echo "its cloudy";
    // }

    // $age = 18;
    // $citizen = true;

    // if(!$age >= 18 || !$citizen){
    //     echo "you cannot vote <br>";
    // }
    // else{
    //     echo "you can vote <br>";
    // }

    $child = false;
    $senior = true;
    $tickect = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo "the ticket price is \${$ticket}";
?>