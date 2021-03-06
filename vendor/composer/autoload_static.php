<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8189d28545b43aa957e56d794598c301
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Renan\\Signal\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Renan\\Signal\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8189d28545b43aa957e56d794598c301::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8189d28545b43aa957e56d794598c301::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8189d28545b43aa957e56d794598c301::$classMap;

        }, null, ClassLoader::class);
    }
}
