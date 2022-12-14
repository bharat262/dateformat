<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita50ecaa5c2c267e8f3c29bad2e477193
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JayanthiNaik\\Date\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JayanthiNaik\\Date\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita50ecaa5c2c267e8f3c29bad2e477193::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita50ecaa5c2c267e8f3c29bad2e477193::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita50ecaa5c2c267e8f3c29bad2e477193::$classMap;

        }, null, ClassLoader::class);
    }
}
