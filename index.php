<?php
$name = "John Doe";
$age = 25;
$isMale = true;
$height = 1.85;

$gpa = 3.7;
$price = 20.99;
$tax_rate = 4.239;

$employed = true;
$online = false;
$for_sale = true;
$quantity = 5;
$food = "Pizza";




echo "Hello {$name} <br>";
echo "You are {$age} years old. <br>";
echo "You are {$height} meters tall. <br>";

echo "Your gpa is: {$gpa} <br>";
echo "The price is: \${$price} <br>";
echo "The tax rate is {$tax_rate}% <br>";
echo "You have ordered {$quantity} {$food}s <br>";
$total = $price * $quantity;
echo "The total is: \${$total} <br>";


?>

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