<?php

namespace FoodItems;

class CheeseBurger extends FoodItem{
    public const CATEGORY = "Burger";

    public function __construct() {
        parent::__construct("Cheese Burger","Classic burger with delicious cheese.",800);
    }

    public function getCategory(): string
    {
        return CheeseBurger::CATEGORY;
    }
}