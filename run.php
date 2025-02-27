#!/usr/bin/env php
<?php

foreach (array(__DIR__ . '/../../autoload.php', __DIR__ . '/vendor/autoload.php') as $file) {
    if (file_exists($file)) {
        define('COMPOSER_INSTALL_PATH', $file);
        break;
    }
    unset($file);
}

if (!defined('COMPOSER_INSTALL_PATH')) {
    exit('You need to set up the project dependencies using Composer');
}

require COMPOSER_INSTALL_PATH;

if (isset($argv[1])) {
    exit(\O9k4sv\Phpbrackets\Functions\checkBrackets($argv[1]) ? 'ok' : 'fail');
} else {
    exit('no argument passed');
}
