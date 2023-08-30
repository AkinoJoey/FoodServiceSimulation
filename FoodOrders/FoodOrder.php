<?php

namespace FoodOrders;


class FoodOrder{
    private array $items;
    private string $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = date("D m d, Y G: i");
    }
}