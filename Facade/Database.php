<?php

namespace Facade;

class Database
{
    // 外からNewできないようにPrivate
    private function __construct()
    {
    }

    // 戻り値としてJavaだとPropertiesを返しているが、要するに設定ファイルをパースして中のものをgetPropertyで取り出しているだけ。PHPではiniファイルをparseしてArrayにでも突っ込んでそれを使う。
    public static function getProperties(string $dbName): array
    {
        $fileName = $dbName . '.txt';

        if ($arr = parse_ini_file($fileName)) {
            return $arr;
        }

        echo "ファイルが見つからないか、ファイル形式が正しくありません \n";
        exit();
    }
}