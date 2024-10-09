<?php

setcookie("fav_food", "pizza", time() + 86400, "/");
setcookie("fav_game", "league of legends", time() + (86400 * 4), "/");
setcookie("fav_color", "blue", time() + (86400 * 7), "/");

foreach ($_COOKIE as $key => $value) {
    echo "{$key} => {$value} <br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "BUY SOME {$_COOKIE['fav_food']}";
} else {
    echo "I don't know your favorite food";
}
