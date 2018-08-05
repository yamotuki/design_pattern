<?php

namespace adapter_pattern\Delegation;

require_once 'Banner.php';
require_once 'PrintAbstract.php';

class PrintBanner extends PrintAbstract
{

    private $banner;

    public function __construct($string)
    {
        $this->banner = new Banner($string);
    }

    public function printWeak()
    {
        $this->banner->showWithParen();
    }

    public function printStrong()
    {
        $this->banner->showWithAster();
    }

}