<?php

namespace Visitor_pattern;

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

    public function add(Entry $entry): Entry
    {
        $this->directory[] = $entry;
        return $this;
    }

    public function getEntries()
    {
        return $this->directory;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visitDirectory($this);
    }
}