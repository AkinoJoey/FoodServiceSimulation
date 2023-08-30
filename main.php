<?php

use Persons\Customer;

function myAutoloader($className) {
    $file = str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_extensions(".php");
spl_autoload_register('myAutoloader');



$cheeseBurger = new \FoodItems\CheeseBurger();




$interestedTastesMap = [
    "Margherita" =>1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1
];

$Tom = new Persons\Customers\Customer("Tom", 20, "Saitama", $interestedTastesMap);
