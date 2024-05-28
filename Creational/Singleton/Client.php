<?php

namespace Creational\Singleton;

class Client
{
    public static function run(): void
    {
        $singleton = Singleton::getInstance();
        $singleton->test();
    }

}