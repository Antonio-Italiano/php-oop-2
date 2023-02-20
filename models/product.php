<?php
include_once __DIR__ . './category.php';

class Product
{
    public $name;
    public $typology;
    public $material;
    public $price;
    public $quantity;
    public $recycled;
    public $color;
    public $availability;

    public function __construct($name, Category $typology, $material, $price, $quantity = 1, $recycled = 'no', $color = null, $availability = '')
    {
        $this->name = $name;
        $this->typology = $typology;
        $this->material = $material;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->recycled = $recycled;
        $this->color = $color;
        $this->availability = $availability;
    }

    public function is_available($number)
    {
        if(!is_numeric($number) || $number < 1) return $this->availability = $number;
    }
}