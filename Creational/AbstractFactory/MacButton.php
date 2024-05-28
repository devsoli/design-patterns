<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\Button;

class MacButton implements Button
{
    public function render(): string
    {
        return 'mac btn';
    }
}