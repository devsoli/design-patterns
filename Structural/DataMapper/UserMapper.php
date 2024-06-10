<?php

namespace Structural\DataMapper;

use PDO;

class UserMapper
{
    private PDO $dbConnection;

    public function __construct(PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getBuId(int $id): ?User
    {
        $stmt = $this->dbConnection->prepare('SELECT * FROM users WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return null;
        }

        return new User($result['id'], $result['name'], $result['email']);
    }

    public function save(User $user): void
    {
        $stmt = $this->dbConnection->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');

        $name = $user->getName();
        $stmt->bindParam(':name', $name);

        $email = $user->getEmail();
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        $id = $this->dbConnection->lastInsertId();

        $user->setId($id);
    }
}