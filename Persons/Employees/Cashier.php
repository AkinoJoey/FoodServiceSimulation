<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;
use Persons\Employees\Employee;
use Restaurants\Restaurant;
use Invoices\Invoice;
class Cashier extends Employee{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    // categories [string foodName => int number]の連想配列 string[]
    // orderMap [FoodItem foodItem => int number]の連想配列 FoodItem[]
    public function generateOrder(array $categories, Restaurant $restaurant):FoodOrder{
        $outputText = $this->getName() . " received the order.";
        print($outputText);

        $orderMap = [];
        $menu = $restaurant->getMenu();

        for($i = 0; $i < count($menu); $i++){
            $foodItem = $menu[$i];
            $foodName = $foodItem->getName();
            if(array_key_exists($foodName,$categories)){
                $orderMap[$foodItem] = $categories[$foodName];
            }
        }

        return new FoodOrder($orderMap);
    }

    // 受け取ったfoodOrderのinvoiceを作成する
    public function generateInvoice(FoodOrder $foodOrder) : Invoice {
        $finalPrice = $this->returnFinalPrice($foodOrder->getItems());
        $orderTime = $foodOrder->getOrderTime();
        $estimatedTimeInMinutes = $this->returnEstimatedCookTime($foodOrder);

        print($this->getName() . " made the invoice.");
        return new Invoice($finalPrice, $orderTime, $estimatedTimeInMinutes);
    }

    public function returnFinalPrice(array $items) : float {
        $finalPrice = 0;

        foreach($items as $item => $number){
            $finalPrice += $item * $number;
        }

        return $finalPrice;
    }

    public function returnEstimatedCookTime(FoodOrder $foodOrder) : int {
        $estimatedTimeInMinutes = 0;
        $items = $foodOrder->getItems();

        for($i = 0; $i < count($items); $i++){
            $foodItem = $items[$i];
            $estimatedTimeInMinutes += $foodItem->getCookTime();
        }

        return $estimatedTimeInMinutes;
    }

}