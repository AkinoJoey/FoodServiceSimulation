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

    // [string foodName => int number]を返す
    public function InterestedCategories(Restaurant $restaurant) : array {
        $orderList = [];
        $menu = $restaurant->getMenu();

        for($i = 0; $i < count($menu); $i++){
            $foodName = $menu[$i]->getName();
            if(array_key_exists($foodName,$this->interestedTastesMap)){
                $orderList[$foodName] = $this->interestedTastesMap[$foodName];
            }
        }
        
        return $orderList;
    }

    
    public function order(Restaurant $restaurant, array $categories): Invoice{
            $text = $this->getName() . " was looking at the menu, and ordered " ;

            foreach($categories as $foodName => $number){
                $text .= $foodName . " x " . $number;
            }

            $text .= ".";
            print($text);

            $invoice = $restaurant->order($categories);
            return $invoice;
    }

}