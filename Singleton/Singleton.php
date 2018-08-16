<?php

namespace Design_pattern\Singleton;

class Singleton
{
    // プロパティ（フィールド）にデフォルト値を設定することはできるが、「宣言時に初期値を設定することもできますが、初期値は定数値でなければなりません。」とのこと
    // なのでJavaでできるように$sigletonへ自分自身をNewしたものは入れることができない。
    private static $singleton;

    // Javaでは中のメソッドを呼ぶときに初回にコンストラクタが呼ばれるようであるが、PHPの場合はStaticメソッドを呼ぶときにコンストラクタは呼ばれない？　のでこのブロックは無駄？
    // => と思ったが、コンストラクタはPrivateで定義しているからこそインスタンス化が外部からできないようになるのでSingletonになる。これを消してしまうとどこからでもNewできてしまう。
    // また、コンストラクタの処理も、$singletonにまだ入っていなければ初回実行されるので表示されるはず。
    private function __construct()
    {
        print("インスタンスを作成しました" ."\n");
    }

    public static function getSingleton(): Singleton
    {
        // プロパティにデフォルトで入れられない代わりに、ここで入っていなければ入れる。
        if(!isset(Singleton::$singleton)) {
            Singleton::$singleton = new Singleton();
        }
        return Singleton::$singleton;
    }
}

