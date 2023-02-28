<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5a9627afd75cc040f0f5ff7a19c248e
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5a9627afd75cc040f0f5ff7a19c248e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5a9627afd75cc040f0f5ff7a19c248e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5a9627afd75cc040f0f5ff7a19c248e::$classMap;

        }, null, ClassLoader::class);
    }
}
