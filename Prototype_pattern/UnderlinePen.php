<?php

require_once "prototype_framework/ProductInterface.php";

class UnderlinePen implements ProductInterface
{
    private $ulchar;

    public function __construct(String $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    public function use(String $s)
    {
        $length = strlen($s);
        print "\"" . $s . "\"" ;

        print "\n";
        for ($i = 1; $i < $length + 4; $i++) {
            print $this->ulchar;
        }
        print "\n";
    }

    public function createClone(): ProductInterface
    {
        return clone $this;
    }
}