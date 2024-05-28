<?php

namespace Creational\Builder;

class Burger
{
    private string $bun;
    private string $patty;
    private string $cheese;
    private array $toppings = [];

    public function setBun(string $bun): void
    {
        $this->bun = $bun;
    }

    public function setPatty(string $patty): void
    {
        $this->patty = $patty;
    }

    public function setCheese(string $cheese): void
    {
        $this->cheese = $cheese;
    }

    public function addToppings(string $toppings): static
    {
        $this->toppings[] = $toppings;
        return $this;
    }

    public function getBurgerInfo(): string
    {
        $toppingsStr = implode(',', $this->toppings);
        return "Burger Info: {$this->bun} | {$this->patty} | {$this->cheese}  + {$toppingsStr}";
    }
}