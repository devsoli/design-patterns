<?php

namespace Structural\Bridge;

class LightTheme implements Theme
{

    public function getBackgroundColor(): string
    {
        return '#FFFFFF';
    }

    public function getTextColor(): string
    {
        return "#0000000";
    }
}