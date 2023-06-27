<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitff550ce0be4a968f8c79d99ab6f59a18
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

        spl_autoload_register(array('ComposerAutoloaderInitff550ce0be4a968f8c79d99ab6f59a18', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitff550ce0be4a968f8c79d99ab6f59a18', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitff550ce0be4a968f8c79d99ab6f59a18::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
