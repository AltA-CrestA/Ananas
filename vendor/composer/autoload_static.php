<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb8b3fe6d5046f842c2dec15cdf1a12f
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\components\\Db' => __DIR__ . '/../..' . '/app/components/Db.php',
        'App\\components\\Router' => __DIR__ . '/../..' . '/app/components/Router.php',
        'App\\models\\Cart' => __DIR__ . '/../..' . '/app/models/Cart.php',
        'App\\models\\Category' => __DIR__ . '/../..' . '/app/models/Category.php',
        'App\\models\\Like' => __DIR__ . '/../..' . '/app/models/Like.php',
        'App\\models\\Product' => __DIR__ . '/../..' . '/app/models/Product.php',
        'App\\models\\Ticket' => __DIR__ . '/../..' . '/app/models/Ticket.php',
        'App\\models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb8b3fe6d5046f842c2dec15cdf1a12f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb8b3fe6d5046f842c2dec15cdf1a12f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb8b3fe6d5046f842c2dec15cdf1a12f::$classMap;

        }, null, ClassLoader::class);
    }
}
