<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\Button;

class WindowsButton implements Button
{
    public function render(): string
    {
        return 'windows btn';
    }
}