<?php

namespace Creational\SimpleFactory;

class ProductFactory
{
    public function createProduct(string $type, string $name, float $price, string $description)
    {
        return match ($type) {
            'book' => new Book($name, $price, $description),
            'Laptop' => new Laptop($name, $price, $description),
            'Phone' => new Phone($name, $price, $description),
        };
    }
}