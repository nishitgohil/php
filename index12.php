<?php

    // cookie = informatio about a user stired in a users web browser

    setcookie("fav_food", "pizza", time() + 86400 * 2, "/"); // -2 to clear cookie 
    setcookie("fav_drink", "coffee", time() + (86400 * 3),"/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4),"/");

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_COOKIE["fav_food"])){
        echo "Buy Some {$_COOKIE["fav_food"]} !!";
    }
    else{
        echo "i dont know your favorite food";
    }
?>