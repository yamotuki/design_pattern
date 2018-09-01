<?php

require_once "prototype_framework/ProductInterface.php";

class MessageBox implements ProductInterface
{
    private $decochar;

    public function __construct(String $decochar)
    {
        $this->decochar = $decochar;
    }

    public function use(String $s)
    {
        $length = strlen($s);
        for ($i = 1; $i < $length + 4; $i++) {
            print $this->decochar;
        }

        print "\n";
        print "$this->decochar" . " " . $s . " " . $this->decochar;
        print "\n";

        for ($i = 1; $i < $length + 4; $i++) {
            print $this->decochar;
        }
        print "\n";
    }

    public function createClone(): ProductInterface
    {
        return clone $this;
    }
}