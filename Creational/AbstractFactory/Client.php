<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Contracts\UIFactory;

class Client
{
    public function __construct(public UIFactory $factory)
    {
    }

    public function run(): string
    {
        $btn = $this->factory->createButton();
        $form = $this->factory->createForm();

        return $btn->render().' '.$form->render();
    }
}
/*
 * If we use this class in a framework that has dependency injection, it is better to bind it.
 */
$clientTest = new Client(factory: new MacUIFactory::class);
echo $clientTest->run();

