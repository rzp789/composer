<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf365e5d9c17f1749b7be1f18061a0a87
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf365e5d9c17f1749b7be1f18061a0a87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf365e5d9c17f1749b7be1f18061a0a87::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf365e5d9c17f1749b7be1f18061a0a87::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
