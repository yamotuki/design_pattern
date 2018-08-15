<?php

namespace Design_pattern\Singleton;

class Singleton
{
    // プロパティ（フィールド）にデフォルト値を設定することはできるが、「宣言時に初期値を設定することもできますが、初期値は定数値でなければなりません。」とのこと
    // なのでJavaでできるように$sigletonへ自分自身をNewしたものは入れることができない。
    private $singleton;

    private function Singleton()
    {
        print("インスタンスを作成しました");
    }

    public static function getSingleton(): Singleton
    {
        // プロパティにデフォルトで入れられない代わりに、ここで入っていなければ入れる。
        if(!isset($singleton)) {
            $singleton = new Singleton();
        }
        return $singleton;
    }
}

