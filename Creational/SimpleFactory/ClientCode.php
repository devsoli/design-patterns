<?php
use Creational\SimpleFactory\ProductFactory;

//just test
function run()
{
    $productFactory = new ProductFactory();
    $product = $productFactory->createProduct('book', 'Clean Code', 255, 'Handbook of Agile Software Craftsmanship');
    echo $product->getName();
    echo $product->getPrice();
    echo $product->getDescription();
}

