<?php

namespace Creational\SimpleFactory;

interface Product
{
    public function getName(): string;

    public function getPrice(): float;

    public function getDescription(): string;
}