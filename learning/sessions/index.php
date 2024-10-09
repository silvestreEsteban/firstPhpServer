<?php
// session = a way to store information (in variables) to be used across multiple pages
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
    This is the login page <br>
    <a href="home.php">This goes to the home page</a> <br>
</body>

</html>
<?php
$_SESSION["username"] = "JohnDoe";
$_SESSION["password"] = "password123";

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";
?>