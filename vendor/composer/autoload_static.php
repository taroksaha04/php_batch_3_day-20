<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb0400c46c3e4abd73e7035dc565f50e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb0400c46c3e4abd73e7035dc565f50e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb0400c46c3e4abd73e7035dc565f50e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb0400c46c3e4abd73e7035dc565f50e::$classMap;

        }, null, ClassLoader::class);
    }
}