<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd6ac8f2564afc171d08e05c23cd11e4
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd6ac8f2564afc171d08e05c23cd11e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd6ac8f2564afc171d08e05c23cd11e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd6ac8f2564afc171d08e05c23cd11e4::$classMap;

        }, null, ClassLoader::class);
    }
}