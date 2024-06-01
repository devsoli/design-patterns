<?php

namespace Structural\Bridge;

class DarkTheme implements Theme
{

    public function getBackgroundColor(): string
    {
        return '#1E1E1E';
    }

    public function getTextColor(): string
    {
        return "#FFFFFF";
    }
}