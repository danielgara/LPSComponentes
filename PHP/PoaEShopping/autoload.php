<?php

// Composer autoloading
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    /** @var Composer\Autoload\ClassLoader $loader */
    $loader = include __DIR__ . '/vendor/autoload.php';
    $loader->add('aspects', __DIR__);
}