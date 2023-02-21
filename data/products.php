<?php 

require_once __DIR__ . './categories.php';

$dog_food = new FoodProduct('croccantini', $for_dog, 'meat, vegetables', 3.99, 5);
$cat_food = new FoodProduct('croccantini', $for_cat, 'meat, vegetables', 3.99, 7);
$dog_house = new ObjectProduct('house', $for_dog, 'plastic, wood', 17.99, 'red', 5, 'recycled materials');
$cat_house = new ObjectProduct('house', $for_cat, 'plastic, wood', 13.99, 'blue', 6, 'recycled materials');

$products = [$dog_food, $cat_food, $dog_house, $cat_house];