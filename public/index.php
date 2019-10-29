<?php
// Uncomment to disable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Uncomment when using composer
//require_once '../vendor/autoload.php';

// Uncomment if you downloaded PHPagebuilder
//require_once __DIR__ . '/../phpagebuilder/src/Core/helpers.php';
//spl_autoload_register('phpb_autoload');

$config = require __DIR__ . '/../config.php';

$builder = new PHPageBuilder\PHPageBuilder($config);
$builder->handleRequest();
