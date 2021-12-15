<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0297dba7b792d9426fdcc0d4a4f44110
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Traits\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../traits',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../models',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0297dba7b792d9426fdcc0d4a4f44110::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0297dba7b792d9426fdcc0d4a4f44110::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0297dba7b792d9426fdcc0d4a4f44110::$classMap;

        }, null, ClassLoader::class);
    }
}
