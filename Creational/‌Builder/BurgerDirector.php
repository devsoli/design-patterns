<?php

namespace Creational\Builder;

class BurgerDirector
{
    private BurgerBuilder $builder;

    public function setBurger(BurgerBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function build(): Burger
    {
        $this->builder->setBun();
        $this->builder->setPatty();
        $this->builder->setCheese();
        $this->builder->setToppings();

        return $this->builder->getBurger();
    }
}