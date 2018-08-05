<?php

namespace adapter_pattern\Delegation;

require_once 'PrintBanner.php';

$print = new PrintBanner('hello');
$print->printWeak();
$print->printStrong();

