<?php

require_once "Item.php";

abstract class Page
{
    protected $title;
    protected $author;
    protected $content = [];

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function add(Item $item)
    {
        $this->content[] = $item;
    }

    public function output()
    {
        $filename = $this->title . '.html';
        file_put_contents($filename, $this->makeHTML());
        echo($filename . 'を作成しました');
    }

    public abstract function makeHTML(): string;
}