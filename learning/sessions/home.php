<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is the home page <br>
    <a href="index.php">This goes to the login page</a> <br>
</body>
<?php

$_SESSION["username"] = "JohnDoe";
$_SESSION["password"] = "password123";

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";
?>