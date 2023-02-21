<?php 
require_once __DIR__ . '../product.php';

class ObjectProduct extends Product
{
    public $material;
    public $color;
   
    public function __construct($name, Category $typology, $material, $price, $color, $quantity = 1, $recycled = '', $availability = '')
    {
        parent::__construct($name, $typology, $price, $quantity, $recycled, $availability);
        $this->material = $material;
        $this->color = $color;

    }
}