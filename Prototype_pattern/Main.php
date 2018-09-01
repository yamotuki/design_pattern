<?php

require_once "prototype_framework/Manager.php";
require_once "prototype_framework/ProductInterface.php";
require_once "MessageBox.php";
require_once "UnderlinePen.php";

$manager = new Manager();

$upen = new UnderlinePen('~');
$mbox = new MessageBox('*');
$sbox = new MessageBox('/');

$manager->register("strong_message", $upen);
$manager->register("warning box", $mbox);
$manager->register("slash box", $sbox);

$p1 = $manager->create("strong_message");
$p1->use("hello world");

$p2 = $manager->create("warning box");
$p2->use("hello world");

$p3 = $manager->create("slash box");
$p3->use("hello world");