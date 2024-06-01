<?php

namespace Structural\Bridge;

class AboutPage extends AbstractWebPage
{
    public function getContent(): string
    {
        return sprintf(
            "<div style='background-color: %s; color: %s;'>Welcome to my site</div>",
            $this->getBackgroundColor(),
            $this->getTextColor()
        );
    }
}