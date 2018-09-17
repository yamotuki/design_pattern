<?php

require_once "Item.php";

abstract class Link extends Item
{
    protected $url;

    public function __construct(string $caption, string $url)
    {
        // これいるのだっけ？　=> どの引数をわたすかという話があるから明示的に呼ぶ必要があるかな。
        parent::__construct($caption);
        $this->url = $url;
    }
}