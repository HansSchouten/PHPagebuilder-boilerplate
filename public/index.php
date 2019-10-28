<?php
// Uncomment when using composer
//require_once '../vendor/autoload.php';

// Uncomment if you downloaded PHPagebuilder
//$installationFolder = __DIR__ . '/../phpagebuilder';
//require_once $installationFolder . '/src/Core/helpers.php';
//spl_autoload_register('phpb_autoload');

$config = require __DIR__ . '/../config.php';

$builder = new PHPageBuilder\PHPageBuilder($config);
$builder->handleRequest();
