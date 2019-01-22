<?php

namespace Observer;

require_once __DIR__ . "/../vendor/autoload.php";

$generator = new RandomNumberGenerator();
$observer1 = new DigitObserver();
$observer2 = new GraphObserver();
$generator->addObserver($observer1);
$generator->addObserver($observer2);

$generator->deleteObserver($observer1);
$generator->execute();
