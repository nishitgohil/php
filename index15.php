<?php
// hashing = transforming sensitive  data pass.. into letters, numbers, and/or symbols via a mathematical process. similar to encryption hides the original data from 3rd parties.
    $password = "pizza123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash;
    if(password_verify("pizza123", $hash)){
        echo "you are logged in!";
    }
    else{
        echo "Incorrect password!";
    }
?>