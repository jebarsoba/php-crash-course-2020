<?php

class Person {
    public string $name;
    public int $age;
    private ?float $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $age;
    }

    public function getSalary(): ?float {
        return $this->salary;
    }
}