<?php

// What is a variable

// Variable types

// Declare variables
$name = 'Jorge';
$age = 41;
$isMale = true;
$height = 1.81;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo "$age<br>";
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
var_dump($name, $age);
var_dump($isMale, $height, $salary);

// Change the value of the variable
$name = 41;

// Print type of the variable
echo gettype($name);

// Variable checking functions
is_string($name);

// Check if variable is defined
var_dump(isset($address));

// Constants
define('PI', 3.14);
echo PI;
var_dump(defined('PI')); // true
echo PHP_INT_MAX;

// Using PHP built-in constants
