<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>
<?php
// $_SERVER = a PHP super global variable which holds information about headers, paths, and script locations
// $_SERVER["REQUEST_METHOD"] = retrieves the request method used to access the page
// $_SERVER["REQUEST_METHOD"] == "POST" = checks if the request method is POST

// foreach ($_SERVER as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") { // preferable to if(isset($_POST["submit"]))
    echo "HELLO";
}
?>