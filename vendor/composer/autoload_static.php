<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc053fc8fe8f96caa31fdbfb6bbd32fd6
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc053fc8fe8f96caa31fdbfb6bbd32fd6::$classMap;

        }, null, ClassLoader::class);
    }
}
