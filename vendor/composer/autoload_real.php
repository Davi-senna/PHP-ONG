<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit220f23b2fd57af4498e6b9903b324c06
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

        spl_autoload_register(array('ComposerAutoloaderInit220f23b2fd57af4498e6b9903b324c06', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit220f23b2fd57af4498e6b9903b324c06', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit220f23b2fd57af4498e6b9903b324c06::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
