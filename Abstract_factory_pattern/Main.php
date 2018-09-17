<?php

require_once "factory/Factory.php";

if ($argc !== 1) {
    var_dump("Usage: php Main.php class_name_of_ConcreteFactory");
    return;
}

$factory = Factory::getFactory($argv[0]);

$asahi = $factory->createLink("asahi newsPaper", "https://asahi.com/");
$yomiuri = $factory->createLink("yomiuri newsPaper", "https://yomiuri.co.jp/");

$us_yahoo = $factory->createLink("yahoo us", "https://yahoo.com/");
$ja_yahoo = $factory->createLink("yahoo japan", "https://yahoo.co.jp/");

// excite などは略

$traynews = 
