<?php

namespace Creational\Builder;

class BasicBurgerBuilder implements BurgerBuilder
{
    private Burger $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function setBun(): void
    {
        $this->burger->setBun('Plain Bun');
    }

    public function setPatty(): void
    {
        $this->burger->setPatty('Plain Patty');
    }

    public function setCheese(): void
    {
        $this->burger->setCheese('Cheese');
    }

    public function setToppings(): void
    {
        // nothing
    }

    public function getBurger(): Burger
    {
        return $this->burger;
    }

}