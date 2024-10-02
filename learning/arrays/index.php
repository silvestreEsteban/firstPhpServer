<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?php

// $foods = array("apple", "orange", "banana", "coconut");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";

// Better method to display array content

// array_push($foods, "pineapple", "pear");

// array_pop($foods);

// array_shift($foods);

// $reversedFoods = array_reverse($foods);
// foreach ($reversedFoods as $reversedFood) {
//     echo $reversedFood . "<br>";
// }

// echo count($foods);


// foreach ($foods as $food) {
//     echo $food . "<br>";
// }




// Associative arrays (key-value pairs)
// Countries => Capitals etc.

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "South Korea" => "Seoul",
    "Spain" => "Madrid"
);


$capital = $capitals[$_POST["country"]];

echo $capital;










// $capitals["USA"] = "Las Vegas"; This is to update the value of a key
// echo $capitals["USA"] . "<br>";
// $capitals["China"] = "Beijing"; This is to add a new key-value pair
// array_pop($capitals); Remove last item from array
// array_shift($capitals); Remove first item from array
// array_unshift($capitals, "China" => "Beijing"); Add new item to the beginning of the array
// array_push($capitals, "China" => "Beijing"); Add new item to the end of the array
// array_reverse($capitals); Reverse the order of the array
// count($capitals); Count the number of items in the array

// $keys = array_keys($capitals);
// $values = array_values($capitals);

// foreach ($values as $value) {
//     echo $value . "<br>";
// }

// foreach ($keys as $key) {
//     echo $key . "<br>";
// }

// foreach ($capitals as $key => $value) {
//     echo "The capital of " . $key . " is " . $value . "<br>";
// }



?>