<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e04a5f2c7dc5844bc634130cf5c02ed
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e04a5f2c7dc5844bc634130cf5c02ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e04a5f2c7dc5844bc634130cf5c02ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e04a5f2c7dc5844bc634130cf5c02ed::$classMap;

        }, null, ClassLoader::class);
    }
}
