<?php

namespace Creational\Prototype;

class Client
{
    public static function run(): void
    {
        $phpProto = new PhpBookPrototype();

        $sqlProto = new SqlBookPrototype();

        $book1 = clone $sqlProto;
        $book1->setTitle('how to write sql queries?');

        echo $book1->getTopic().'|'.$book1->getTitle();

        $book2 = clone $sqlProto;
        $book2->setTitle('SQL for beginner');

        echo $book2->getTopic().'|'.$book2->getTitle();
    }
}