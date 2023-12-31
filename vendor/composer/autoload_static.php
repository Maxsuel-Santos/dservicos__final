<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54cc900b644e03a915385d8c5991ba9a
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ifba\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ifba\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit54cc900b644e03a915385d8c5991ba9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54cc900b644e03a915385d8c5991ba9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54cc900b644e03a915385d8c5991ba9a::$classMap;

        }, null, ClassLoader::class);
    }
}
