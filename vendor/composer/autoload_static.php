<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7df76d4e5515f8fc3581480fc5ee4054
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SmartUI\\' => 8,
        ),
        'C' => 
        array (
            'Common\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SmartUI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/smartui',
        ),
        'Common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/common',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7df76d4e5515f8fc3581480fc5ee4054::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7df76d4e5515f8fc3581480fc5ee4054::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7df76d4e5515f8fc3581480fc5ee4054::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
