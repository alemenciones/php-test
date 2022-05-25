<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c589e632112f1b7890bcd046e490b67
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TestPhp\\Alemenciones\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TestPhp\\Alemenciones\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c589e632112f1b7890bcd046e490b67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c589e632112f1b7890bcd046e490b67::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c589e632112f1b7890bcd046e490b67::$classMap;

        }, null, ClassLoader::class);
    }
}
