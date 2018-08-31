<?php

namespace Design_pattern\Singleton\Practice5_1;
require_once "TicketMaker.php";

for ($i = 0; $i <= 10; $i++) {
    print TicketMaker::getInstance()->getNextTicketNumber() . "\n";
}

$obj3 = TicketMaker::getInstance();
$obj4 = TicketMaker::getInstance();
if ($obj3 == $obj4) {
    print "同じ" ."\n";
}