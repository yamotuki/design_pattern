<?php

// TODO この実装がAdapterパターンに従っているか改めて確認する
namespace adapter_pattern\VersionUpAndCompatible;

require_once 'Adapter.php';

$oldClass = new oldClass();
$oldClass->oldMethod();
echo "\n";

// 互換性を保つためにAdapterを通せばoldMethodをよびだせるが、内部ではnewMethodを使っている
// 今は違う変数名に入れているが、同じ変数名だとすればDIとかで突っ込むインスタンスを置き換えるだけで動きを変えずに差し替えられる。
$compatibleClass = new Adapter();
$compatibleClass->oldMethod();
echo "\n";