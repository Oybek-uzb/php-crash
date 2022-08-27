<?php
    $y = 12;
    echo $y;
    echo "<br>";

    function registerUser(): int {
        global $y;
        echo $y;

        return 9;
    }

    $sum = function ($num1 = 0, $num2 = 0) {
        return $num1 + $num2;
    };

    echo $sum(10) . "<br>";
    registerUser();

    $multiply = fn($num1 = 1, $num2 = 1) => $num1 * $num2; // arrow-functions only for single line code.

