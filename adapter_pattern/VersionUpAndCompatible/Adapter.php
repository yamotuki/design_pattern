<?php

namespace adapter_pattern\VersionUpAndCompatible;

require_once 'newClass.php';
require_once 'oldClass.php';
require_once 'outputInterface.php';

class Adapter implements \outputInterface
{

    private $new;

    public function __construct()
    {
        $this->new = new newClass();
    }

    public function oldMethod()
    {
        $this->new->newMethod();
        echo ' two';
    }
}