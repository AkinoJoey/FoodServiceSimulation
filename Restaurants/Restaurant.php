<?php

namespace Restaurants;

use Invoices\Invoice;

class Restaurant{
    private array $menu;
    private array $employees; 

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array{
        return $this->menu;
    }

    public function getEmployees() : array {
        return $this->employees;
    }

    // 注文するカテゴリを受け取って、情報を
    // public function order(array $categories): Invoice{

    // }

}