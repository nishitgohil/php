<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index7.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>

<?php 
    
    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "username is missing";
        }
        elseif(empty($password)){
            echo "password is missing";
        }
        else{
            echo "hello {$username}";
        }
    }

    // $username = "null";

    // if(isset($username)){
    //     echo "this variable is set";
    // }
    // else{
    //     echo "this variable is not set";
    // }

    // $username = true;

    // if(empty($username)){
    //     echo "this variable is empty";
    // }
    // else{
    //     echo "this variable is not empty";
    // }
?> 