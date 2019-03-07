<?php

namespace Proxy_pattern;

interface PrintableInterface
{
    public function setPrinterName(string $name): void;

    public function getPrinterName(): string;

    public function print(string $string): void;
}