<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06383e307fc255f8157909fa64cb575c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06383e307fc255f8157909fa64cb575c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06383e307fc255f8157909fa64cb575c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06383e307fc255f8157909fa64cb575c::$classMap;

        }, null, ClassLoader::class);
    }
}
