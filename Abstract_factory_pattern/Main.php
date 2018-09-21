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
$traysearch->add($trayyahoo);


$page = $factory->createPage("link_page", "tomoya suzuki");
$page->add($traynews);
$page->add($traysearch);
$page->output();

/*
Memo  Mainから見たら、AbstractFactoryたちは知っていて、そのメソッドを使っている。
しかしその中で何が動いているかは知らなくて良い。手順として、Factoryを名前渡してインスタンス化して、リンク使ってトレイに、さらにページに入れていくという流れだけ知って入れば良い。
Mainは具体的にリンク化処理をどうするか、Trayをどう表示するのか、とかは知らなくて良い。ただし、FactoryのCreateHoge()メソッドたちの引数は決まっているので、何を渡す必要があるか、は知っている必要がある

*/
