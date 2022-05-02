<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[0].'<br>';

// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
var_dump(isset($fruits[2]));

// Append element
$fruits[] = 'Banana';
var_dump($fruits);

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'Kiwi');
var_dump($fruits);

// Remove element from the end of the array
array_pop($fruits);

// Add element at the beginning of the array
array_unshift($fruits, 'Apple');

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = 'Banana,Apple,Peach';
var_dump(explode(',', $string));

// Combine array elements into string
echo implode('&', $fruits).'<br>';

// Check if element exist in the array
echo in_array('Apple', $fruits);

// Search element index in the array
echo array_search('Apple', $fruits);

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]); // Spread operator from 7.4...

// Sorting of array (Reverse order also)
sort($fruits);
var_dump($fruits);

// Filter, map and reduce
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$evens = array_filter($numbers, fn($n) => $n % 2 === 0); // Arrow functions from 7.4...
var_dump($evens);

$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);

echo array_reduce($numbers, fn($carry, $n) => $carry + $n);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
  'name' => 'Brad',
  'surname' => 'Traversy',
  'age' => 30,
  'hobbies' => ['Tennis', 'Video Games']
];

// Get element by key
echo $person['name'].'<br>';
echo $person['age'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';

// Check if array has specific key
isset($person['age']); // true
isset($person['address']); // false

// Print the keys of the array
var_dump(array_keys($person));

// Print the values of the array
var_dump(array_values($person));

// Sorting associative arrays by values, by keys
ksort($person);
var_dump($person);

krsort($person);
var_dump($person);

asort($person);
var_dump($person);

arsort($person);
var_dump($person);

// Two dimensional arrays
$todoItems = [
  ['title' => 'item 1', 'completed' => true],
  ['title' => 'item 2', 'completed' => false]
];

var_dump($todoItems);