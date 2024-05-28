<?php

namespace Creational\Singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {

    }

    public static function getInstance(): Singleton
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // function just for client test
    public function test(): void
    {
        echo "test";
    }
}