<?php

    $age = 15;

    // if ($age >= 18 and $age < 20) {
    //     echo "you are a teenager";
    // }
    // elseif ($age >= 20 and $age < 30) {
    //     // code...
    //     echo "you are in your 20s";
    // }
    // elseif ($age >= 30 and age <= 40) {
    //     echo "you are in your 30s";
    // }
    // else {
    //     echo "you are retired";
    // }

# Switch case
    // switch (true) {
    //     case ($age >= 18 and $age <= 20):
    //         echo "You are eligible";
    //         break;

    //     case ($age >= 21 and $age <= 30):
    //         echo "You are not eligible";
    //         break;

    //     default:
    //         echo "Enter a valid age";
    //         break;
    // }

# Ternary Operator
    // $z = "You are an " . ($age > 18 ? "adult" : "young");
    // echo $z;

# String operator
    // $s = "Hello ";
    // $s .= "Jyoti @ ";
    // $s .= $age;

    // echo $s;

# While loop
    // $b = 1;
    // while ($b <= 10) {
    //     echo $b. "</br>";
    //     $b++;
    // }

# do while loop
    // $b = 1;
    // do {
    //     echo $b. "</br>";
    //     $b++;
    // }
    // while ($b <= 11);

# for loop
    // for($b = 0; $b <= 10; $b++) {
    //     echo $b . "<br>";
    // }


# Nested for loop
    // echo "<table border = 1>";
    // for ($a = 1; $a < 100; $a += 10) {
    //     echo "<tr>";
    //     for ($b = $a; $b < $a+10; $b++) {
    //         echo "<td width=30px height=30px align=center>";
    //         echo $b . " ";
    //         echo "</td>";
    //     }
    //     echo "</tr>";
    //     echo "</td>";
    // }
    // echo "</table>";

# Functions
//     function hello() { // Function declaration
//         echo "Hello everyone..";
//     }

//     hello(); // Fucntion call

# Call by reference
// function add5($num) {
//     $num += 5;
// }

// function add5_ref(&$num) {
//     $num += 5;
// }

// $number = 10;
// add5($number);
// echo "Result of call by value " . $number . "<br>";

// add5_ref($number);
// echo "Result of call by reference " . $number . "<br>";

# Function variables
// function add5() {
//     return "Hey there teddy bear";
// }

// $func = add5();
// echo $func . "<br>";
// // This way also works
// $func = "add5";
// echo $func() . "<br>";

# Anonymous function being assigned to a variable
// $func = function($num) {
//     return $num+100;
// };

// echo $func(200);



?>