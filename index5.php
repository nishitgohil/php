<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index5.php" method="post">
        <!-- <label>Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start"> -->
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // for($i = 10; $i >= 0; $i-=2){
    //     echo $i . "<br>";
    // }

    // // for loop 
    // $counter = $_POST["counter"];

    // for($i = $counter; $i > 0; $i--){
    //     echo $i . "<br>";
    // }

    // // while loop 
    // $counter =0;

    // while($counter < 20){
    //     $counter++;
    //     echo $counter . "<br>";
    // }

    // while loop [infinity]
    $seconds = 0;
    $running = true;

    while($running){

        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            $seconds++;
            echo $seconds . "<br>";
        }
    }
?>