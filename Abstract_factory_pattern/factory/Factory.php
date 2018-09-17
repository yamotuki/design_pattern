<?php

require_once "Link.php";
require_once "Tray.php";
require_once "Page.php";

abstract class Factory
{
    public static function getFactory(string $classname): Factory
    {
        return new $classname();
    }

    public abstract function createLink(string $caption, string $url): Link;

    public abstract function createTray(string $caption): Tray;

    public abstract function createPage(string $title, string $author): Page;
}