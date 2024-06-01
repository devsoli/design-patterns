<?php

namespace Structural\Bridge;

abstract class AbstractWebPage implements WebPage
{
    public function __construct(protected Theme $theme)
    {
    }

    public function setTheme(Theme $theme): void
    {
        $this->theme = $theme;
    }

    public function getBackgroundColor(): string
    {
        return $this->theme->getBackgroundColor();
    }

    public function getTextColor(): string
    {
        return $this->theme->getTextColor();
    }

    abstract public function getContent(): string;
}