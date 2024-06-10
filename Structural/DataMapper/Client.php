<?php

namespace Structural\DataMapper;

use PDO;

class Client
{

    public static function run()
    {
        $dbConnection = new PDO('mysql:host=localhost;dbname=data', 'root', 'password');
        $userMapper = new UserMapper($dbConnection);

        $newUser = new User(null, 'Abolfazl Soltani', '1abolfazl.soltani1@gmail.com');
        $userMapper->save($newUser);
        echo $newUser->getId().PHP_EOL;

        $user = $userMapper->getBuId(1);
        echo $user->getName();
    }

}