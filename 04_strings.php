<?php

// Create simple string
$name = 'TheCodeholic';
$hello = 'Hello ' . $name;
$hello2 = "Hello $name";

// String concatenation
echo $hello . '<br>'
  . $hello2 . '<br>';

// String functions
$string = "   Hello World   ";
echo '1 - ' . strlen($string) . '<br>' . PHP_EOL;
echo '2 - ' . trim($string) . '<br>' . PHP_EOL;
echo '3 - ' . ltrim($string) . '<br>' . PHP_EOL;
echo '4 - ' . rtrim($string) . '<br>' . PHP_EOL;
echo '5 - ' . str_word_count($string) . '<br>' . PHP_EOL;
echo '6 - ' . strrev($string) . '<br>' . PHP_EOL;
echo '7 - ' . strtoupper($string) . '<br>' . PHP_EOL;
echo '8 - ' . strtolower($string) . '<br>' . PHP_EOL;

// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php