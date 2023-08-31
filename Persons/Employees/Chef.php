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
        $chefName = $this->getName();
        $output = $chefName . " was cooking ";
        $cookTime = 0;

        for($i = 0; $i < count($foodItems); $i++){
            $item = $$foodItems[$i];
            $foodName = $item->getName();
            $output .= $foodName . "." . "\n";
            $cookTime += $item->getCookTime();
        }

        print($output);
        printf($chefName . " took " . (string)$cookTime . "minutes to cook." );

        return $output;
    }
}