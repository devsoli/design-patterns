<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\Form;

class WindowsForm implements Form
{
    public function render(): string
    {
        return 'windows form';
    }
}