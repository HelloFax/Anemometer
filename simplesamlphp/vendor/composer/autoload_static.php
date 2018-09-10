<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bb0c763138870fe8fd8b05533dce507
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '6175f5662c2e26de0149cb048cda7209' => __DIR__ . '/..' . '/simplesamlphp/saml2/src/_autoload.php',
        '5abda994d126976858eb25d2546ee3c9' => __DIR__ . '/../..' . '/lib/_autoload_modules.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WhiteHat101\\Crypt\\' => 18,
        ),
        'T' => 
        array (
            'Twig\\Extensions\\' => 16,
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'SimpleSAML\\' => 11,
        ),
        'R' => 
        array (
            'RobRichards\\XMLSecLibs\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'J' => 
        array (
            'JaimePerez\\TwigConfigurableI18n\\' => 32,
        ),
        'G' => 
        array (
            'Gettext\\Languages\\' => 18,
            'Gettext\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WhiteHat101\\Crypt\\' => 
        array (
            0 => __DIR__ . '/..' . '/whitehat101/apr1-md5/src',
        ),
        'Twig\\Extensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/extensions/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'SimpleSAML\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/SimpleSAML',
        ),
        'RobRichards\\XMLSecLibs\\' => 
        array (
            0 => __DIR__ . '/..' . '/robrichards/xmlseclibs/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'JaimePerez\\TwigConfigurableI18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaimeperez/twig-configurable-i18n/src',
        ),
        'Gettext\\Languages\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/languages/src',
        ),
        'Gettext\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/gettext/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'SAML2\\' => 
            array (
                0 => __DIR__ . '/..' . '/simplesamlphp/saml2/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bb0c763138870fe8fd8b05533dce507::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bb0c763138870fe8fd8b05533dce507::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4bb0c763138870fe8fd8b05533dce507::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
