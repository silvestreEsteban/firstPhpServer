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
// hashing = transforming sensitive data (password)
// into letters, numbers, and/or symbols
// via a mathematical algorithm
// to prevent unauthorized access

// password_hash() = hashes a password
// password_verify() = verifies a password

// password_hash() = password_hash($password, PASSWORD_DEFAULT);
// password_verify() = password_verify($password, $hashed_password);

$password = "ilovecoding";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash . "<br>";

if (password_verify("ilovecoding", $hash)) {
    echo "Password is correct";
} else {
    echo "Password is incorrect";
}
?>