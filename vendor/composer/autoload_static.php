<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaeeba6a3b4f3c898711bec15a8d3e429
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TexLab\\MyDB\\' => 12,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TexLab\\MyDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/texlab/mydb/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaeeba6a3b4f3c898711bec15a8d3e429::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaeeba6a3b4f3c898711bec15a8d3e429::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
