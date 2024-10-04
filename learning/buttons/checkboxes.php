<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="submit" value="submit">

    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    if (isset($_POST["pizza"])) {
        echo "Pizza selected<br>";
    }
    if (isset($_POST["hamburger"])) {
        echo "Hamburger selected<br>";
    }
    if (isset($_POST["taco"])) {
        echo "Taco selected<br>";
    }
    if (isset($_POST["hotdog"])) {
        echo "Hotdog selected<br>";
    }
    if (empty($_POST["pizza"])) {
        echo "You don't like pizza? <br>";
    }
    if (empty($_POST["hamburger"])) {
        echo "You don't like hamburgers? <br>";
    }
    if (empty($_POST["taco"])) {
        echo "You don't like tacos? <br>";
    }
    if (empty($_POST["hotdog"])) {
        echo "You don't like hotdogs? <br>";
    }
}
