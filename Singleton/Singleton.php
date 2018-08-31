<?php

namespace Design_pattern\Singleton;

class Singleton
{
    // プロパティ（フィールド）にデフォルト値を設定することはできるが、「宣言時に初期値を設定することもできますが、初期値は定数値でなければなりません。」とのこと
    // なのでJavaでできるように$sigletonへ自分自身をNewしたものは入れることができない。
    private static $singleton;

    // Private であることが重要
    private function __construct()
    {
        print("インスタンスを作成しました" ."\n");
    }

    public static function getSingleton(): Singleton
    {
        // プロパティにデフォルトで入れられない代わりに、ここで入っていなければ入れる。
        if(!isset(self::$singleton)) {
            self::$singleton = new self();
        }
        return self::$singleton;
    }
}

