<?php

require_once "Entry.php";

class FileEntry extends Entry
{
    private $name;
    private $size;

    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function printList(string $prefix = "")
    {
        // MEMO ここで単に $this と書いているのでは 文字列連結の時に $this->__toString() が呼ばれるから
        echo($prefix . "/" . $this . "\n");
    }
}