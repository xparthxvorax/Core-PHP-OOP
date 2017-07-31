<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit659307950d8b734bf273dc85f31561a1
{
    public static $prefixLengthsPsr4 = array (
        'x' => 
        array (
            'xparthxvorax\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'xparthxvorax\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit659307950d8b734bf273dc85f31561a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit659307950d8b734bf273dc85f31561a1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}