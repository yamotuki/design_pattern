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

// warning boxとSlash boxの内部実装は同じ。これを引数をわたすではなくて別々に定義すると煩雑になる。
$p3 = $manager->create("slash box");
$p3->use("hello world");

// 仮に、また別の記号でMessage boxを作りたくなった場合にも簡単に作れる
$manager->register("plus box", new MessageBox('+'));
$p4 = $manager->create("plus box");
$p4->use("hello world");

//　以下あんまりわかっていない
// 便利になるかな？　と思って tempCreateClone を作ってみたが・・・　　
// これはMessageBoxに渡す引数がはっきりわかっている場合には良いが、もっと複雑なインスタンス化の過程がある場合にはRegisterと分けたほうが良い？
// なんらかの複雑処理でインスタンス作成 => register をやる　というのをまとめてしまうと使い勝手がよくない？
$p5 = $manager->tempCreateClone(new MessageBox('-'));
$p5->use('hello world');