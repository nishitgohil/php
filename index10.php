<?php
    //function
    // function hypotenuse($a, $b){
    //     $c = sqrt($a ** 2 + $b ** 2);
    //     return $c;        
    // }
    // echo hypotenuse(1, 2);

    //string function
    $username = array("Bro", "The", "Code");
    $phone = "123-456-7890";
    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "0");
    // $phone = str_replace("-", "/", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "Bro Cod");
    // $count = strlen($phone);
    // $index = strpos($username, " ");
    // $firstname = substr($username, 0, 3);
    // $lastname = substr($username, 4);
    // $fullname = explode(" ",$username);
    $username = implode("-",$username);
    echo $username;
   
?>
    