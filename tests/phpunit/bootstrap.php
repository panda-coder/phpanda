<?php

chdir( dirname(dirname(__DIR__)));

// Composer autoloading
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}
