<?php

namespace Creational\SimpleFactory;

class Laptop implements Product
{
    public function __construct(
        private string $name,
        private float $price,
        private string $description,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}