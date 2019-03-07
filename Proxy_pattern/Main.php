<?php

namespace Proxy_pattern;

require_once __DIR__ . "/../vendor/autoload.php";

$p = new PrinterProxy("Alice");
echo "現在の名前は" . $p->getPrinterName() . "です。\n";

$p->setPrinterName("Bob");
echo "現在の名前は" . $p->getPrinterName() . "です。\n";
$p->print("Hello World!");
