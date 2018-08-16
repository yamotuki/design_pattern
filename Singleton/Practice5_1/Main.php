<?php

namespace Design_pattern\Singleton\Practice5_1;
require_once "TicketMaker.php";


// getNextTicketNumber がStaticであるなら直接呼んでもstaticな$ticketに値が保持されているのでインクリメントできる。
// getNextTicketNumber()をstaticにしておけばいける これじゃあダメなのか？
// ＝＞ Singletonはあくまで「インスタンス化が一回」と言うパターン　それに従うならStaticMethodを使ってしまうのは確かに違う。
/*
$obj1 = TicketMaker::getNextTicketNumber();
print $obj1 . "\n";
$obj2 = TicketMaker::getNextTicketNumber();
print $obj2 . "\n";
*/

$obj3 = TicketMaker::getInstance();
print $obj3->getNextTicketNumber() . "\n";

for ($i = 1; $i <= 10; $i++) {
    print TicketMaker::getInstance()->getNextTicketNumber() . "\n";
}

$obj4 = TicketMaker::getInstance();
if ($obj3 == $obj4) {
    print "同じ" ."\n";
}