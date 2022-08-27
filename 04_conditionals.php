<?php

//    Operators

// <, >, <=, >=, ==, !=
// ===, !== - Identical or not identical to

// if statement syntax

//if (condition) {}

$t = date("H");

if ($t > 11) echo "${t} > 11";
elseif ($t < 9) echo "${t} < 9";
elseif ($t > 10) {
    echo $t . " > 10";
}

echo "<br>";

$time = date('F');
echo $time, "<br>";

$posts = ['My first post'];
if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts yet';
}

// switch operator is identical with switch operation of JS.