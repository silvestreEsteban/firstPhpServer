<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php

function hypotenuse(float $a, float $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}


$username = "Vessi Bop";

// $username = strtolower($username); changes to lower case
// $username = strtoupper($username); changes to upper case
// $username = trim($username); removes white spaces
// $username = strlen($username); checks length of string
// $username = str_replace("Vessi", "Bessi", $username); replace Vessi with Bessi
// $username = str_repeat($username, 5); repeats the string 5 times
// $username = str_shuffle($username); shuffles the string
// $username = substr($username, 0, 5); returns the first 5 characters
// $username = str_word_count($username); counts the words
// $username = strrev($username); reverses the string
// $username = strpos($username, "B"); returns the position of the first B
// $username = str_replace(" ", "", $username); removes spaces
// $username = str_pad($username, 20, "*"); adds * to the end of the string until it reaches 20 characters

// $fullname = explode (" ", $username); splits the string into an array
// $username = implode(" ", $fullname); joins the array into a string

// foreach($fullname as $name){
//     echo $name . "<br>";
// }


?>