<?php

require_once "Link.php";
require_once "Tray.php";
require_once "Page.php";

abstract class Factory
{
    public static function getFactory(string $fileName): Factory
    {

        // $ php Main.php "listfactory/ListFactory.php こんな感じで読み込まれる想定
        require_once($fileName);
        $className = basename($fileName, ".php");

        return new $className();
    }

    public abstract function createLink(string $caption, string $url): Link;

    public abstract function createTray(string $caption): Tray;

    public abstract function createPage(string $title, string $author): Page;
}