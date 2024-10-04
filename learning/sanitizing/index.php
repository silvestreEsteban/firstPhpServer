<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Age:</label><br>
        <input type="text" name="age"><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br><br>
        <input type="submit" value="login" name="login">
    </form>
</body>

</html>
<?php

if (isset($_POST["login"])) {
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($age)) {
        $age = "N/A";
    }
    echo "You are $age years old!";
    // echo "Hello $username, you are $age years old! This is your email: $email";
}

?>

<!-- FILTER_SANITIZE_NUMBER_INT | filters all characters that are not integers -->
<!-- FILTER_SANITIZE_EMAIL | filters all characters that are illegal with email inputs -->
<!-- SANITIZATION FILTERS CHARACTERS AND REPLACES THEM || STRIPS CERTAIN CHARACTERS OF USER INPUT -->
<!-- VALIDATION IF DOESN`T PASS RETURNS EMPTY STRING -->