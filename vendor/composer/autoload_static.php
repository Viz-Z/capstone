<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitced0527e8732d1c6a57a0b7162761af2
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luecano\\NumeroALetras\\' => 22,
        ),
        'D' => 
        array (
            'Docxmerge\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luecano\\NumeroALetras\\' => 
        array (
            0 => __DIR__ . '/..' . '/luecano/numero-a-letras/src',
        ),
        'Docxmerge\\' => 
        array (
            0 => __DIR__ . '/..' . '/docxmerge/docxmerge-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitced0527e8732d1c6a57a0b7162761af2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitced0527e8732d1c6a57a0b7162761af2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitced0527e8732d1c6a57a0b7162761af2::$classMap;

        }, null, ClassLoader::class);
    }
}
