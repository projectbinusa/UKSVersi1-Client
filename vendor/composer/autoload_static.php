<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit106e2cf285900cae98ff86368c7e185a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit106e2cf285900cae98ff86368c7e185a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit106e2cf285900cae98ff86368c7e185a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit106e2cf285900cae98ff86368c7e185a::$classMap;

        }, null, ClassLoader::class);
    }
}