<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd871583e4c8890dcfd0621f476387f6c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd871583e4c8890dcfd0621f476387f6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd871583e4c8890dcfd0621f476387f6c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd871583e4c8890dcfd0621f476387f6c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
