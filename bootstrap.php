<?php

include 'config/bootstrap.config.php';

// Composer autoloading
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

\PHPanda\Std\App::displayErrors();
\PHPanda\Std\App::Run();
