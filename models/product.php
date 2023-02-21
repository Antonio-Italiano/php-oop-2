<?php
include_once __DIR__ . './category.php';

class Product
{
    public $name;
    public $typology;
    public $price;
    public $quantity;
    public $recycled;
    public $availability;

    public function __construct($name, Category $typology, $price, $quantity = 1, $recycled = '', $availability = '')
    {
        $this->name = $name;
        $this->typology = $typology;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->recycled = $recycled;
        $this->availability = $availability;
    }

    public function availability($number)
    {
        if(is_numeric($number) || $number < 1) return $this->availability = 'last '. $number;
    }
}