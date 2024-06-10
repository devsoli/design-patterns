<?php

namespace Structural\Composite;

class Book implements Product
{
    public function __construct(private string $name, private float $price)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}