<?php

require_once "Entry.php";

class DirectoryEntry extends Entry
{
    private $name;

    private $directory = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        $size = 0;
        foreach ($this->directory as $entry) {
            $size += $entry->getSize();
        }
        return $size;
    }

    public function add(Entry $entry): void
    {
        $this->directory[] = $entry;
    }

    public function printList(string $prefix = "")
    {
        echo($prefix . "/" . $this . "\n");

        foreach ($this->directory as $entry) {
            $entry->printList($prefix . "/" . $this->name);
        }
    }
}