<?php

namespace Creational\Prototype;

abstract class BookPrototype
{
    protected string $title;
    protected string $topic;

    abstract function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTopic(): string
    {
        return $this->topic;
    }
}