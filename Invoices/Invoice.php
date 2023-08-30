<?php

namespace Invoices;

class Invoice{
    private float $finalPrice;
    private string $orderTime;
    private int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, int $estimatedTimeInMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = date("D m d, Y G: i");;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

}