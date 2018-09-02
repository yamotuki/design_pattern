<?php

require_once "ProductInterface.php";

class Manager
{
    private $showcase = [];

    public function register(String $name, ProductInterface $proto)
    {
        $this->showcase[$name] = $proto;
    }

    public function create(String $protoname): ProductInterface
    {
        $p = $this->showcase[$protoname];
        return $p->createClone();
    }

    // 登録とCloneを一緒にやってしまうメソッドだったらもっと使いやすくなったりしない？ 配列に保存しておくのは煩雑では？
    public function tempCreateClone(ProductInterface $proto)
    {
        return $proto;
    }


}