<?php

namespace Structural\Bridge;

class Client
{
    public static function run(): void
    {
        $theme = new LightTheme(); // or DarkTheme
        $homePage = new HomePage($theme);

        echo $homePage->getContent();
    }
}