<?php

// Function which prints "Hello I am Zura"
//function hello() {
//    echo 'Hello I am Jorge';
//}
//hello();

// Function with argument
function hello($name) {
    echo "Hello I am $name";
}

hello('Jorge');

// Create sum of two functions
//function sum($a, $b) {
//    return $a + $b;
//}
//
//echo sum(4, 5);

// Create function to sum all numbers using ...$nums
function sum(...$numbers) {
    return array_reduce($numbers, fn($carry, $number) => $carry + $number);
}

echo sum(1, 2, 3, 4, 5);

// Arrow functions
