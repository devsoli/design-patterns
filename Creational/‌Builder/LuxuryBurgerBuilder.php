<?php

namespace Creational\Builder;

class LuxuryBurgerBuilder implements BurgerBuilder
{
    private Burger $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function setBun(): void
    {
        $this->burger->setBun('seed Bun');
    }

    public function setPatty(): void
    {
        $this->burger->setPatty('beef Patty');
    }

    public function setCheese(): void
    {
        $this->burger->setCheese(' swiss Cheese');
    }

    public function setToppings(): void
    {
        $this->burger->addToppings('onion')
        ->addToppings('tomato')
        ->addToppings('Ketchup');
    }

    public function getBurger(): Burger
    {
        return $this->burger;
    }

}