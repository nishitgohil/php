<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index6.php" method="post">
        <label>enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php  //arrays
    // $foods = array("apple", "orange", "banana", "coconut");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";
    
    // $foods [0] = "pineapple";

    // array_push($foods, "pineapple", "kiwi");
    // array_pop($foods);
    // array_shift($foods);
    // $foods = array_reverse($foods);
    // echo count($foods) . "<br>";
    
    //  foreach($foods as $food){
    //     echo $food . "<br>";
    //  }

    // associative array s = key=>value pairs
    $capitals = array("USA"=> "Wasington DC",
                      "Japan"=>"Tokyo",
                      "India"=>"Delhi",
                      "South Korea"=>"Seoul");
    // echo $capitals["USA"]; 
    
    // $capitals ["USA"] = "Lasvegas";
    // $capitals ["China"] = "Beijing";
    // array_pop($capitals);
    //$capitals = array_flip($capitals);
    //$capitals = array_reverse($capitals);
    // echo count($capitals) . "<br>";

    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }  
    
    $capital = $capitals[$_POST["country"]];
    echo "the capital is {$capital}";
    
?>    