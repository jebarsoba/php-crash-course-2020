<?php

$age = 41;
$salary = 400000;

// Sample if
if ($age > 25) {
    echo 'You are not young'.'<br>';
} else {
    echo 'You are young'.'<br>';
}

// Without circle braces

// Sample if-else
if ($age < 22) {
    echo 'Young'.'<br>';
} elseif ($age < 30) {
    echo 'Neither young nor old'.'<br>';
} elseif ($age < 60) {
    echo 'Old but not so much'.'<br>';
} else {
    echo 'Old'.'<br>';
}

// Difference between == and ===

// if AND

// if OR

// Ternary if
echo $age < 22 ? 'Young' : 'Not young';

// Short ternary
$myAge = $address ?: 'Current location';
echo $myAge.'<br>';

// Null coalescing assignment operator. Since PHP 7.4
$person = [
  // 'name' => 'Jorge'
];
$person['name'] ??= 'Anonymous';
echo $person['name'];

// switch
