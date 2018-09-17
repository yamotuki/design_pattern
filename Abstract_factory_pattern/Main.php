<?php

require_once "factory/Factory.php";

if ($argc !== 2) {
    var_dump("Usage: php Main.php class_name_of_ConcreteFactory");
    return;
}

$factory = Factory::getFactory($argv[1]);


$asahi = $factory->createLink("asahi newsPaper", "https://asahi.com/");
$yomiuri = $factory->createLink("yomiuri newsPaper", "https://yomiuri.co.jp/");
$traynews = $factory->createTray("newspaper");
$traynews->add($asahi);
$traynews->add($yomiuri);


$us_yahoo = $factory->createLink("yahoo us", "https://yahoo.com/");
$ja_yahoo = $factory->createLink("yahoo japan", "https://yahoo.co.jp/");
$trayyahoo = $factory->createTray("yahoo");
$trayyahoo->add($us_yahoo);
$trayyahoo->add($ja_yahoo);


$excite = $factory->createLink("excite", "https://excite.com");
$google = $factory->createLink("google", "https://google.com");
$traysearch = $factory->createTray("search engine");
$traysearch->add($excite);
$traysearch->add($google);


$page = $factory->createPage("link_page", "tomoya suzuki");
$page->add($traynews);
// TODO trayyahoo は足さない？
$page->add($traysearch);
$page->output();