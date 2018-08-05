<?php

namespace adapter_pattern\Inheritance;

class Banner
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        echo('(' . $this->string . ')' . "\n");
    }

    public function showWithAster()
    {
        echo('*' . $this->string . '*' . "\n");
    }
}