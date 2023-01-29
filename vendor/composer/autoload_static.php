<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb75db05f5204441ae1c9763459091831
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'itrax\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'itrax\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb75db05f5204441ae1c9763459091831::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb75db05f5204441ae1c9763459091831::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb75db05f5204441ae1c9763459091831::$classMap;

        }, null, ClassLoader::class);
    }
}
