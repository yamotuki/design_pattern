<?php

namespace Proxy_pattern;

class Printer implements PrintableInterface
{
    private $name;

    public function __construct(?string $name = null)
    {
        $this->name = $name;
        $this->heavyJob($this->name . " Printerのインスタンスを作成中");
    }

    public function getPrinterName(): string
    {
        return $this->name;
    }

    public function setPrinterName(string $name): void
    {
        $this->name = $name;
    }

    public function print(string $string): void
    {
        echo "=== " . $this->name . " === \n";
        echo $string . "\n";
    }

    private function heavyJob(string $msg)
    {
        echo $msg;

        for ($i = 0; $i < 5; $i++) {
            sleep(1);
            echo ".";
        }

        echo "完了。\n";
    }
}