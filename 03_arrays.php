<?php
    $numbers = [1, 4, 9, 16, 25, 36];
    $fruits = array('apple', 'orange', 'peach');

    var_dump($numbers);

    $colors = [
        1 => 'red',
        4 => 'yellow',
        6 => 'green'
    ];

    var_dump($colors[4]);

    $hex = [
        'red' => '#f00',
        'green' => '#0f0',
        'blue' => '#00f'
    ];

    echo $hex[$colors[1]];

    $person = [
        'first_name' => 'Oybek',
        'last_name' => 'Makhsudov',
        'age' => 21
    ];

    $persons = [
        [
            'first_name' => 'Oybek',
            'last_name' => 'Makhsudov',
            'age' => 21
        ],
        [
            'first_name' => 'Farhod',
            'last_name' => 'Rajabov',
            'age' => 22
        ],
        [
            'first_name' => 'Rustam',
            'last_name' => 'Rajabov',
            'age' => 26
        ]
    ];

    var_dump(json_encode($persons));

    echo json_encode($persons);