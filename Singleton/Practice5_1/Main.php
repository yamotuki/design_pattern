<?php

namespace Design_pattern\Singleton\Practice5_1;
require_once "TicketMaker.php";

$obj1 = TicketMaker::getNextTicketNumber();

print $obj1 . "\n";

$obj2 = TicketMaker::getNextTicketNumber();

print $obj2 . "\n";