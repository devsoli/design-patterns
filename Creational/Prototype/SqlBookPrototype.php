<?php

namespace Creational\Prototype;

class SqlBookPrototype extends BookPrototype
{

    public function __construct()
    {
        $this->topic = 'SQL';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}