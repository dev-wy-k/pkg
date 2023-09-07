<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f6191ea31399cda1ed4239e6934d0fa
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wyk\\Test\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wyk\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f6191ea31399cda1ed4239e6934d0fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f6191ea31399cda1ed4239e6934d0fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f6191ea31399cda1ed4239e6934d0fa::$classMap;

        }, null, ClassLoader::class);
    }
}
