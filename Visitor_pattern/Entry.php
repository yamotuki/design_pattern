<?php

namespace Visitor_pattern;

abstract class Entry implements Element
{
    protected $parent;

    public abstract function getName(): string;

    public abstract function getSize(): int;

    public function add(Entry $entry): Entry
    {
        throw new \FileTreatmentException();
    }

    public function __toString()
    {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}