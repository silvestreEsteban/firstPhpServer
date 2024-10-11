<?php
include("database.php");

$username = 'skep';
$password = 'skengman';
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO first_table (user, password) VALUES ('$username', '$hash')";

try {
    mysqli_query($conn, $sql);
    echo "Data inserted successfully";
} catch (mysqli_sql_exception) {
    echo "Data not inserted";
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Hello</h3>
</body>

</html>
<?php
// 1. MySQLi Extension
// 2. PDO (PHP Data Objects)
?>