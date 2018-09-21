<?php

class Triple
{
    private static $triple = [];

    private function __construct()
    {
        print "生成";
    }

    static function getInstance(int $id)
    {
        // 0, 1, 2 がくることを想定
        if ($id >= 3 || $id < 0) {
            throw new Exception();
        }

        if(empty(self::$triple)) {
            self::$triple[0] = new Triple();
            self::$triple[1] = new Triple();
            self::$triple[2] = new Triple();
        }

        return self::$triple[$id];
    }
}