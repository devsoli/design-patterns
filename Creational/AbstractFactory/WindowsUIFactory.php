<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\Button;
use Creational\AbstractFactory\Contracts\Form;
use Creational\AbstractFactory\Contracts\UIFactory;

class WindowsUIFactory implements UIFactory
{

    public function createButton(): Button
    {
       return new WindowsButton();
    }

    public function createForm(): Form
    {
        return new WindowsForm();
    }
}