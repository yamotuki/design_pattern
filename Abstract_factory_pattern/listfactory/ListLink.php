<?php

require_once "factory/Link.php";

class ListLink extends Link
{

    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string
    {
        return "<li> <a href=" . $this->url . ">" . $this->caption . "</a></li>\n";
    }
}