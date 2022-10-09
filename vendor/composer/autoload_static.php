<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit662ff526ba89ec497a5b9cd5e117778e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/APP',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit662ff526ba89ec497a5b9cd5e117778e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit662ff526ba89ec497a5b9cd5e117778e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit662ff526ba89ec497a5b9cd5e117778e::$classMap;

        }, null, ClassLoader::class);
    }
}
