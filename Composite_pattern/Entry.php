<?php

abstract class  Entry
{
    public abstract function getName(): string;

    public abstract function getSize(): int;

    public function add(Entry $entry): void
    {
        // TODO
//        throw new FileTreatmentException();
        throw new RuntimeException();
    }

// 本のサンプルではJavaのオーバーロードで引数有無が表現されているが、PHPではオーバロードがない。
// その代わり引数のデフォルトを設定することで、引数なしであれば空文字、あればそれを使うというようにしておく。

    public abstract function printList(string $prefix = "");

    public function __toString()
    {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}