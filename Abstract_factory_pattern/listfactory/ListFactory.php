<?php

require_once "factory/Factory.php";
require_once "ListLink.php";
require_once "ListTray.php";
require_once  "ListPage.php";


class ListFactory extends Factory
{
    public function createLink(string $caption, string $url): Link
    {
        return new ListLink($caption, $url);
    }

    public function createTray(string $caption): Tray
    {
        return new ListTray($caption);
    }

    public function createPage(string $title, string $author): Page
    {
        return new ListPage($title, $author);
    }
}