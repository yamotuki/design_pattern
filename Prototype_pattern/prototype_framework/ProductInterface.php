<?php

// TODO JavaではClonableをImplementしないとクローン使えないが、PHPではどう？
interface ProductInterface
{
    public function use(String $s);
    public function createC lone(): ProductInterface;
}