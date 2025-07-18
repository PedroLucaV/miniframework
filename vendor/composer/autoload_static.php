<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87ec0a64327212f357bdcc3b12fd3939
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Vendor/MF',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit87ec0a64327212f357bdcc3b12fd3939::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87ec0a64327212f357bdcc3b12fd3939::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87ec0a64327212f357bdcc3b12fd3939::$classMap;

        }, null, ClassLoader::class);
    }
}
