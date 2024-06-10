<?php

namespace Structural\DataMapper;

class User
{
    public function __construct(private int|null $id, private string $name, private string $email)
    {
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}