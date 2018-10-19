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

    // ファイルのフルパスを得るためにはどこに変更を入れればいいか？というお題で、最初以下のメソッドを生やすことを考えたが、FileインスタンスはどこのDierctoryに含まれているか知ることができないのでここに生やしてもだめ。
/*    public function printFullPath()
    {
    }*/
    // むしろ、Rootに find() メソッドを生やして、最後全部足した後に file名で検索して表示させるみたいなことをしないとダメかも？　
    // そこまで考えて回答を見てみると、parent情報をDirectory（とEntry）に持たせる案が書かれていた。確かにLinuxは ../ にその情報を持っているか。多分それにより pwd とかを表現している。
}