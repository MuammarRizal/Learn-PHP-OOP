<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit35ac6a6d80de60f5bc0f0da5fa5c1aed
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit35ac6a6d80de60f5bc0f0da5fa5c1aed', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit35ac6a6d80de60f5bc0f0da5fa5c1aed', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit35ac6a6d80de60f5bc0f0da5fa5c1aed::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}