  // server super global variable, that contains header, paths, and script locations. The entire in this array are created by the web server. Shows nearly everything you need to know about the current web page environment.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index14.php" method="post">
        <label>Username</label>
        <input type="text" name="username">
        <input type="submit" >
    </form>
</body>
</html>

<?php
    // foreach($_SERVER as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "HELLO";
    }
?>