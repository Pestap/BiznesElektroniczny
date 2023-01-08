<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf77a788179f3cb74d085cf0c7d5cd867
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

        spl_autoload_register(array('ComposerAutoloaderInitf77a788179f3cb74d085cf0c7d5cd867', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf77a788179f3cb74d085cf0c7d5cd867', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf77a788179f3cb74d085cf0c7d5cd867::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInitf77a788179f3cb74d085cf0c7d5cd867::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiref77a788179f3cb74d085cf0c7d5cd867($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiref77a788179f3cb74d085cf0c7d5cd867($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
