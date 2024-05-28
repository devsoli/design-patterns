<?php

namespace Creational\Builder;

class Client
{
    public static function run(): void
    {
        $director = new BurgerDirector();

        // build basic burger
        $basicBuilder = new BasicBurgerBuilder();
        $director->setBurger($basicBuilder);
        $basicBurger = $director->build();

        echo $basicBurger->getBurgerInfo() . '<br>';

        // build luxury burger
        $luxuryBuilder = new LuxuryBurgerBuilder();
        $director->setBurger($luxuryBuilder);
        $luxuryBurger = $director->build();

        echo $luxuryBurger->getBurgerInfo();
    }
}