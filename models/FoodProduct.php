<?php 
require_once __DIR__ . '../product.php';

class FoodProduct extends Product
{
    public $ingredients;
   
    public function __construct($name, Category $typology, $ingredients, $price, $quantity = 1, $recycled = '', $availability = '')
    {
        parent::__construct($name, $typology, $price, $quantity, $recycled, $availability);
        $this->ingredients = $ingredients;
    }
}