<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
$a += $b; echo $a . '<br>';
$a -= $b; echo $a . '<br>';
$a *= $b; echo $a . '<br>';
$a /= $b; echo $a . '<br>';
$a %= $b; echo $a . '<br>';

// Increment operator
echo $a++;
echo ++$a;

// Decrement operator
echo $a--;
echo --$a;

// Number checking functions
var_dump(is_integer(4));
var_dump(is_float(5.6));
var_dump(is_numeric("5.6"));

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber; // Type casting (same as $number = floatval($strNumber);)
var_dump($number);

// Number functions
echo abs(-15) . '<br>';
echo pow(2, 3) . '<br>';
echo sqrt(16) . '<br>';
echo max(2, 3) . '<br>';
echo min(2, 3) . '<br>';
echo round(2.4) . '<br>';
echo round(2.6) . '<br>';
echo floor(2.6) . '<br>';
echo ceil(2.4) . '<br>';

// Formatting numbers
$number = 123456789.123;
echo number_format($number, 3, ',', '.');

// https://www.php.net/manual/en/ref.math.php
