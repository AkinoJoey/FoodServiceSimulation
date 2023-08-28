<?php

namespace Persons;

abstract class Person{
    private string $name;
    private int $age;
    private string $address;

    public function __construct(string $name, int $age, string $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}