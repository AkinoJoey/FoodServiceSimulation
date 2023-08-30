<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
use FoodOrders\FoodOrder;

class Chef extends Employee{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(FoodOrder $foodOrder): string{
        $foodItems = $foodOrder->getItems();
        $output = $this->getName() . " was cooking ";

        foreach($foodItems as $item){
            $foodName = $item->name;
            $output .= $foodName . "." . "\n";
        }
        return $output;
    }
}