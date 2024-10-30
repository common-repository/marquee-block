<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d5d739245437564411c3bd7e0b5c0eb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StorePress\\MarqueeBlock\\' => 24,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StorePress\\MarqueeBlock\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'StorePress\\MarqueeBlock\\Blocks' => __DIR__ . '/../..' . '/includes/Blocks.php',
        'StorePress\\MarqueeBlock\\Common' => __DIR__ . '/../..' . '/includes/Common.php',
        'StorePress\\MarqueeBlock\\Plugin' => __DIR__ . '/../..' . '/includes/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d5d739245437564411c3bd7e0b5c0eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d5d739245437564411c3bd7e0b5c0eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d5d739245437564411c3bd7e0b5c0eb::$classMap;

        }, null, ClassLoader::class);
    }
}
