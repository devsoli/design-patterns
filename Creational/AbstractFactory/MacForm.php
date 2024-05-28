<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\Form;

class MacForm implements Form
{
    public function render(): string
    {
        return 'mac form';
    }
}