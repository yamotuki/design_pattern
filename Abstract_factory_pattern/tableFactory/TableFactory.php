<?php

require_once 'factory/Factory.php';
require_once 'TableLink.php';
require_once 'TableTray.php';
require_once 'TablePage.php';

class TableFactory extends Factory
{
    public function createLink(string $caption, string $url): Link
    {
        return new TableLink($caption, $url);
    }

    public function createTray(string $caption): Tray
    {
        return new TableTray($caption);
    }

    public function createPage(string $title, string $author): Page
    {
        return new TablePage($title, $author);
    }
}