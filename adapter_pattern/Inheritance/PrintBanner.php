<?php

namespace adapter_pattern\Inheritance;

require_once('Banner.php');
require_once('PrintInterface');

class PrintBanner extends Banner implements PrintInterface
{
    public function __construct($string)
    {
        parent::__construct($string);
    }

    public function printWeak()
    {
        $this->showWithParen();
    }

    public function printStrong()
    {
        $this->showWithAster();
    }
}