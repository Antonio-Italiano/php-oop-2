<?php 

require_once __DIR__ . './categories.php';

$dog_food = new Product('croccantini', $for_dog, 'meat, vegetables', 3.99, 5);
$cat_food = new Product('croccantini', $for_cat, 'meat, vegetables', 3.99, 7);
$dog_house = new Product('house', $for_dog, 'plastic, wood', 17.99, 5, 'recycled materials', 'blue, red');
$cat_house = new Product('house', $for_cat, 'plastic, wood', 13.99, 6, 'recycled materials', 'blue, red');

$products = [$dog_food, $cat_food, $dog_house, $cat_house];