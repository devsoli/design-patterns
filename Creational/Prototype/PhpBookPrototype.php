<?php

namespace Creational\Prototype;

class PhpBookPrototype extends BookPrototype
{

    public function __construct()
    {
        $this->topic = 'PHP';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}