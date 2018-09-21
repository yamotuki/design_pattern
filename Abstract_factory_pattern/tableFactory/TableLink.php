<?php

require_once "factory/Link.php";

class TableLink extends Link
{
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string
    {
        // TODO: Implement makeHTML() method.
        return "<td><a href=" . $this->url .  ">" . $this->caption . "</a></td> \n";
    }
}