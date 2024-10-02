<?php
// Logical Operators - combine conditional statements
// if(condition1 && condition2) - True if both conditions are true
// if(condition1 || condition2) - True if at least one condition is true
// ! = True if false, False if true


// $age = 25;
// $citizen = true;

// if ($age >= 18 && $citizen) {
//     echo "You are able to vote";
// } else {
//     echo "You are not able to vote";
// }

// $child = false;
// $senior = false;
// $ticket = null;

// if ($child || $senior) {
//     $ticket = 10;
// } else {
//     $ticket = 20;
// }

// echo "Your ticket costs \${$ticket}";

// Switch statements

// $grade = "Pizza";

// switch ($grade) {
//     case "A":
//         echo "You did amazing!";
//         break;
//     case "B":
//         echo "You did good!";
//         break;
//     case "C":
//         echo "You did okay!";
//         break;
//     case "D":
//         echo "You did poorly!";
//         break;
//     case "F":
//         echo "You failed.";
//         break;
//     default:
//         echo "{$grade} is not a valid grade";
//         break;
// }


$date = date("l");

switch ($date) {
    case "Monday":
        echo "It's Monday!";
        break;
    case "Tuesday":
        echo "It's Tuesday!";
        break;
    case "Wednesday":
        echo "Advanced training on Wednesdays!";
        break;
    case "Thursday":
        echo "It's Thursday!";
        break;
    case "Friday":
        echo "It's Friday!";
        break;
    case "Saturday":
        echo "It's Saturday!";
        break;
    case "Sunday":
        echo "It's Sunday!";
        break;
    default:
        echo "{$date} is not a valid day..";
        break;
}
