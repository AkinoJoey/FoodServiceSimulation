<?php

namespace FoodItems;

abstract class FoodItem{
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    abstract public function getCategory(): string;
}