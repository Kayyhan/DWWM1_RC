<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4bf0770a0da4d30e6055f721dc9d467
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4bf0770a0da4d30e6055f721dc9d467::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4bf0770a0da4d30e6055f721dc9d467::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4bf0770a0da4d30e6055f721dc9d467::$classMap;

        }, null, ClassLoader::class);
    }
}