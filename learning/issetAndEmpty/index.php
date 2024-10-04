<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Log in">

    </form>
</body>

</html>

<?php


foreach ($_POST as $key => $value) {
    echo "$key:  $value <br>";
}


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        echo "Welcome $username";
    }
};


// isset() = returns TRUE if a variable is declared and not null
// empty() = returns TRUE if a variable is not declared, false, null, ""

// $username = "VessiBop";

// echo isset($username); // TRUE
// echo empty($username); // FALSE

// $username = null;

// echo isset($username); // FALSE
// echo empty($username); // TRUE