<?php

namespace Design_pattern\Singleton;
require_once 'Singleton.php';

echo("start" . "\n");

// インスタンスを作成しました、が一回だけ表示されればOK
$obj1 = Singleton::getSingleton();
$obj2 = Singleton::getSingleton();

// == ではなくて === で比較すること（中身が一致、ではなくて、）
if ($obj1 === $obj2) {
    echo('同じ' . "\n");
} else {
    echo('違う' . "\n");
}
echo('end' . "\n");