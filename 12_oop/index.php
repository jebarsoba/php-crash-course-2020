<?php
require_once './Person.php';
require_once './Student.php';

// What is class and instance

// Create Person class in Person.php

// Create instance of Person
$p = new Person('Jorge', 41, null);
$s = new Student('Malena', 4, 1);

// Using setter and getter
var_dump($p);
echo $p->age . '<br>';
echo $p->name . '<br>';
echo $p->getSalary() . '<br>';

var_dump($s);