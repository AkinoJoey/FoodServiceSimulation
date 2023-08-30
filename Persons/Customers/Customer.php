<?php

namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;
use Persons\Employees\Employee;


class Customer extends Person{
    private array $interestedTastesMap;
    public function __construct(string $name, int $age, string $address,array $interestedTastesMap){
        parent::__construct($name, $age, $address);
        $this->interestedTastesMap = $interestedTastesMap;

        $this->printCustomerWantToEat();
    }


    public function printCustomerWantToEat(): void{
        $output = $this->getName() . " wanted to eat ";
        $keys = array_keys($this->interestedTastesMap);
        $imploded_keys = implode(", ", $keys);

        $output .= $imploded_keys . ".";
        
        print($output);
    }

    public function InterestedCategories(Restaurant $restaurant) : array {
        $orderList = [];

        foreach($restaurant->getMenu() as $foodItem){
            $foodName = $foodItem->name;
            if(array_key_exists($foodName,$this->interestedTastesMap)){
                $orderList[$foodName] = $this->interestedTastesMap[$foodName];
            }
        }
        return $orderList;
    }

    
    // public function order(Restaurant $restaurant, array $categories): Invoice{
    //         $text = $this->name . " wanted to eat " .;
    // }

}