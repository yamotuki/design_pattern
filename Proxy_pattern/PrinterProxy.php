<?php

namespace Proxy_pattern;

class PrinterProxy implements PrintableInterface
{
    private $name;
    /** @var Printer $real */
    private $real;

    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }

    public function getPrinterName(): string
    {
        return $this->name;
    }

    public function setPrinterName(string $name): void
    {
        if (!is_null($this->real)) {
            $this->real->setPrinterName($name);
        }

        $this->name = $name;
    }

    public function print(string $string): void
    {
        $this->realize();
        $this->real->print($string);
    }

    private function realize()
    {
        if (is_null($this->real)) {
            $this->real = new Printer($this->name);
        }
    }
}