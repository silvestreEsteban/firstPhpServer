<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" value="confirm" name="confirm">
    </form>
</body>

</html>

<?php



if (isset($_POST["confirm"])) {
    $credit_card = null;

    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
    }
}

switch ($credit_card) {
    case "Visa":
        echo "Visa selected";
        break;
    case "Mastercard":
        echo "Mastercard selected";
        break;
    case "American Express":
        echo "American Express selected";
        break;
    default:
        echo "Please select a credit card";
}
