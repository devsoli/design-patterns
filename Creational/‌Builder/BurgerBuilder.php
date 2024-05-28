<?php

namespace Creational\Builder;

interface BurgerBuilder
{
    public function setBun(): void;

    public function setPatty(): void;

    public function setCheese(): void;

    public function setToppings(): void;

    public function getBurger(): Burger;
}