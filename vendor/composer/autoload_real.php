<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita50ecaa5c2c267e8f3c29bad2e477193
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita50ecaa5c2c267e8f3c29bad2e477193', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita50ecaa5c2c267e8f3c29bad2e477193', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita50ecaa5c2c267e8f3c29bad2e477193::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
