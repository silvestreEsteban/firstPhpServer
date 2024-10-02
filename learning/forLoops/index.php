<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>

    <form action="index.php" method="post">
        <input type="button" value="stop" name="stop">
    </form>
</body>

</html>

<?php

$counter = $_POST["counter"];

// for ($i = $counter; $i >= 0; $i--) {
//     echo $i . "<br>";
// }

// while ($counter >= 0) {
//     echo $counter . "<br>";
//     $counter--;
// }


// $seconds = 0;
// $running = true;

// while ($running) {
//     if (isset($_POST["stop"])) {
//         $running = false;
//     } else {
//         echo $seconds . "<br>";
//         $seconds++;
//         sleep(1);
//     }
// }

?>