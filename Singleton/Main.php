<?php

namespace Design_pattern\Singleton;
require_once 'Singleton.php';

echo("start" . "\n");
$obj1 = Singleton::getSingleton();
$obj2 = Singleton::getSingleton();

if ($obj1 == $obj2) {
    echo('同じ' . "\n");
} else {
    echo('違う' . "\n");
}
echo('end' . "\n");