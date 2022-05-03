<?php

// while

// Loop with $counter
$counter = 0;
while ($counter < 10) {
    echo "Counter $counter".'<br>';
    if ($counter >=5) break;
    $counter++;
}

// do - while
$counter = 0;
do {
    echo "Counter $counter".'<br>';
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo "Counter $i<br>";
}

// foreach
$fruits = ['Banana', 'Apple', 'Orange'];
foreach ($fruits as $i => $fruit) {
    echo "$i $fruit<br>";
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy'
];
foreach ($person as $key => $value) {
    echo "$key is: $value<br>";
}