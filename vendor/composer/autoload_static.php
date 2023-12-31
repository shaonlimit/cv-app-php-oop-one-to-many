<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f6584baa90ff861b0e178444f4557bc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f6584baa90ff861b0e178444f4557bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f6584baa90ff861b0e178444f4557bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f6584baa90ff861b0e178444f4557bc::$classMap;

        }, null, ClassLoader::class);
    }
}
