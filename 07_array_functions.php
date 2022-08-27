<?php
    $fruits = ['apple', 'orange', 'lemon', 'peach', 'cherry'];

    // Get length
    echo count($fruits) . "<br>";

    // Search in array
    var_dump(in_array('apple', $fruits));
    echo "<br>";

    // Append to array
    $fruits[] = 'grape';
    echo json_encode($fruits), "<br>";

    array_push($fruits, 'blueberry', 'strawberry');
    echo json_encode($fruits), "<br>";

    array_unshift($fruits, 'mango'); // like in JS ;)

    // Remove from array
    array_pop($fruits);
    echo json_encode($fruits), "<br>";

    $numbers = range(1, 20);
    $newNumbers = array_map(fn($num) => "Current number: ${num}", $numbers);

    echo json_encode($newNumbers);

    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
    print_r($lessThan10);
