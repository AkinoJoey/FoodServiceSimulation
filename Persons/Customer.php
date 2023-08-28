<?php

namespace Persons;

use Persons\Person;

class Customer extends Person{
    public function __construct(string $make, int $age, string $address){
        parent::__construct($make, $age, $address);
    }

}