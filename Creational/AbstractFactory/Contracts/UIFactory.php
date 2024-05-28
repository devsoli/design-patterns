<?php

namespace Creational\AbstractFactory\Contracts;

interface UIFactory
{
    public function createButton(): Button;

    public function createForm(): Form;
}