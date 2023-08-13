<?php 
    // $grade = "C";

    // if($grade == "A"){
    //     echo "you did great";
    // }
    // elseif($grade == "B"){
    //     echo "you did good";
    // }
    // elseif($grade == "C"){
    //     echo "you did okay";
    // }
    // elseif($grade == "D"){
    //     echo "you did poorly";
    // }
    // elseif($grade == "F"){
    //     echo "you did failed";
    // }
    // else{
    //     echo "{$grade} is not a valid grade";
    // }

    // $grade = "p";

    // switch($grade){
    //     case "A":
    //         echo "you did great";
    //         break;
    //     case "B":
    //         echo "you did good";
    //         break;
    //     case "C":
    //         echo "you did okay";
    //         break;
    //     case "D":
    //         echo "you did poorly";
    //         break;
    //     case "F":
    //         echo "you did failed";
    //         break;
    //     default:
    //         echo "{$grade} is not valid";
    // }

    $date = date("l"); // l show live day 
    // $date = "Monday";
    switch($date){
        case "Monday":
            echo "i hate mondays";
            break;
        case "Tuesday":
            echo "it is taco tuesday";
            break;
        case "Wednesday":
            echo "the work week is half over";
            break;
        case "Thrusday":
            echo "it is almost the weekend";
            break;
        case "Friday":
            echo "the weekend is here";
            break;
        case "Saturday":
            echo "time to party";
            break;
        case "Sunday":
            echo "time to relax";
            break;
        default:
            echo "{$date} is not a day";
    }
?>