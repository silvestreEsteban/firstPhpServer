<?php
include("database.php");

$sql = "SELECT * FROM first_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["user"] . "<br>";
        echo $row["register_date"] . "<br>";
        echo "<br>";
    };
} else {
    echo "No data found";
}


mysqli_close($conn);
