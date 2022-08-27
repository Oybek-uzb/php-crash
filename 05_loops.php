<?php
    for ($i = 0; $i < 10; $i++) {
        echo "${i}<br>";
    }

    // A syntax of while-operator is identical with while-operator of JS
    // There is also do...while operator. It works like do...while operator of Pascal.

    $x = 8;

    do {
        echo $x . "<br>";
        $x = $x + 1;
    } while($x >= 19);

    $sports = ['Football', 'Basketball', 'Volleyball', 'Tennis'];

    foreach ($sports as $value) {
        echo $value . "<br>";
    }

    $person = [
        "first_name" => "Oybek",
        "last_name" => "Makhsudov",
        "age" => 21
    ];

    foreach ($person as $key => $value) {
        echo "$key - $value<br>";
    }