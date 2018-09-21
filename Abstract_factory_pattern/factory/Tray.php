<?php

require_once "Item.php";

abstract class Tray extends Item
{
    protected $tray = [];

    // Memo Javaでは親のコンストラクタを暗黙で呼び出してくれないそうだが、PHPでは呼び出してくれるそうなのでいらなさそう。
    /*
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }*/

    public function add(Item $item)
    {
        $this->tray[] = $item;
    }
}