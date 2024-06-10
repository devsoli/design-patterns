<?php

namespace Structural\Composite;

class Client
{
    public static function run(): void
    {
        $book = new Book('Clean Code', 230000);
        $pen = new Pen('Panter', 20000);
        $phone = new Phone('Iphone 15', 50000000);

        $catalog = new ProductCatalog();
        $catalog->addProduct($book);
        $catalog->addProduct($pen);
        $catalog->addProduct($phone);

        echo $catalog->getName().PHP_EOL.$catalog->getName();

    }
}