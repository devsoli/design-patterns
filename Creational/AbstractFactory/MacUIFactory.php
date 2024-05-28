<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\Button;
use Creational\AbstractFactory\Contracts\Form;
use Creational\AbstractFactory\Contracts\UIFactory;

class MacUIFactory implements UIFactory
{

    public function createButton(): Button
    {
       return new MacButton();
    }

    public function createForm(): Form
    {
        return new MacForm();
    }
}