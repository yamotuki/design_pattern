<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8556d44f5723d6ab8cb52849be955dbf
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Visitor_pattern\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Visitor_pattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Visitor_pattern',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8556d44f5723d6ab8cb52849be955dbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8556d44f5723d6ab8cb52849be955dbf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}