<?php

namespace Structural\Composite;

class ProductCatalog implements Product
{
    private array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getName(): string
    {
        return 'Product Catalog';
    }

    public function getPrice(): float
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }

        return $totalPrice;
    }
}