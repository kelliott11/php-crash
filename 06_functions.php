<?php
function registerUser($email) {
    echo $email . ' Registered';
}

// registerUser('Kelvin');

function sum($n1, $n2) {
    return $n1 + $n2;
}

// echo sum(1, 5);

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

// echo $subtract(10, 5);

$multiply = fn($n1, $n2) =>  $n1 * $n2;

echo $multiply(10, 5);