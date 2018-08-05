<?php

namespace adapter_pattern\Inheritance;

require_once('PrintBanner.php');

$print = new  PrintBanner('hello');
$print->printWeak();
$print->printStrong();