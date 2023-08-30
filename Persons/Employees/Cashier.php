<?php

use FoodOrders\FoodOrder;
use Persons\Employees\Employee;
use Restaurants\Restaurant;

class Cashier extends Employee{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant):FoodOrder{
        $orderList = [];

        foreach($restaurant->getMenu() as $foodItem){
            $foodName = $foodItem->name;
            
        }

        return 2;
    }
}