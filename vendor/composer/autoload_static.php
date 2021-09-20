<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf41a0868bfd687b68c9fd29612835036
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf41a0868bfd687b68c9fd29612835036::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf41a0868bfd687b68c9fd29612835036::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf41a0868bfd687b68c9fd29612835036::$classMap;

        }, null, ClassLoader::class);
    }
}
