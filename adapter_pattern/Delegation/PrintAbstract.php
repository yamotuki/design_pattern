<?php

namespace adapter_pattern\Delegation;

abstract class PrintAbstract
{
    abstract function printWeak();

    abstract function printStrong();
}