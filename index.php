<?php

require_once __DIR__ . './models/product.php';
require_once __DIR__ . './data/products.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>OOP E-commecre</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-between">
            <?php foreach ($products as $product) : ?>
            <div class="col-5 my-4 text-center border border-dark">
                <h1> <?= $product->name ?> </h1>
                <h4> <?= $product->typology->name ?> </h4>
                <h5> <?= $product->material ?> </h5>
                <h2 class="text-danger">$ <?= $product->price ?> </h2>
                <h3> <?= $product->recycled ?> </h3>
                <h4> <?= $product->color ?> </h4>
                <h6 class="text-danger"> <?= $product->availability($product->quantity) ?> </h6>
            </div>
            <?php endforeach ; ?>
        </div>
    </div>
    
</body>
</html>