<?php

namespace Structural\Composite;

interface Product
{
    public function getName(): string;

    public function getPrice(): float;
}