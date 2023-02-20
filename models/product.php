<?php

class Product
{
    public $name;
    public $typology;
    public $material;
    public $color;
    public $price;
    public $quantity;
    public $availability;
    public $recycled;

    public function __construct($name, $typology, $material, $color, $price, $quantity = 1, $availability = '', $recycled = 'no')
    {
        $this->name = $name;
        $this->typology = $typology;
        $this->material = $material;
        $this->color = $color;
        $this->price = $price;
        $this->availability = $availability;
        $this->recycled = $recycled;
    }

    public function is_available($number)
    {
        if(!is_numeric($number) || $number < 1) return $this->availability = $number;
    }


}