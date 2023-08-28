<?php

namespace Persons;

use Persons\Person;

class Employee extends Person{
    private int $employeeId;
    private float $salary;

    public function __construct(string $make, int $age, string $address){
        parent::__construct($make, $age, $address);
    }

}