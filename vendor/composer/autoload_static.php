<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6cb7014016182ae18561a1caa872280e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Apps\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Apps\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_apps',
            1 => __DIR__ . '/../..' . '/_apps/Apps',
        ),
    );

    public static $classMap = array (
        'Apps\\Core' => __DIR__ . '/../..' . '/_apps/Core.php',
        'Apps\\Cron' => __DIR__ . '/../..' . '/_apps/Apps/Cron.php',
        'Apps\\Device' => __DIR__ . '/../..' . '/_apps/Apps/Device.php',
        'Apps\\EmailTemplate' => __DIR__ . '/../..' . '/_apps/Apps/EmailTemplate.php',
        'Apps\\Emailer' => __DIR__ . '/../..' . '/_apps/Apps/Emailer.php',
        'Apps\\MysqliDb' => __DIR__ . '/../..' . '/_apps/Apps/MysqliDb.php',
        'Apps\\PHPMailer' => __DIR__ . '/../..' . '/_apps/Apps/PHPMailer.php',
        'Apps\\Route' => __DIR__ . '/../..' . '/_apps/Apps/Route.php',
        'Apps\\SMTP' => __DIR__ . '/../..' . '/_apps/Apps/SMTP.php',
        'Apps\\Session' => __DIR__ . '/../..' . '/_apps/Apps/Session.php',
        'Apps\\Template' => __DIR__ . '/../..' . '/_apps/Apps/Template.php',
        'Apps\\phpmailerException' => __DIR__ . '/../..' . '/_apps/Apps/PHPMailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6cb7014016182ae18561a1caa872280e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6cb7014016182ae18561a1caa872280e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6cb7014016182ae18561a1caa872280e::$classMap;

        }, null, ClassLoader::class);
    }
}
