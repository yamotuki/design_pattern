<?php

require_once "FileTreatmentException.php";

abstract class  Entry
{
    protected $parent;

    public abstract function getName(): string;

    public abstract function getSize(): int;

    public function add(Entry $entry): void
    {
        throw new FileTreatmentException();
    }

// 本のサンプルではJavaのオーバーロードで引数有無が表現されているが、PHPではオーバロードがない。
// その代わり引数のデフォルトを設定することで、引数なしであれば空文字、あればそれを使うというようにしておく。
    public abstract function printList(string $prefix = "");

    public function addParent(Entry $entry)
    {
        $this->parent = $entry;
    }

    public function getFullPath()
    {
        $prefix = "";
        if (!is_null($this->parent)) {
            $prefix = $this->parent->getFullPath();
        }

        return $prefix . '/' . $this->getName();
    }

    public function __toString()
    {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}