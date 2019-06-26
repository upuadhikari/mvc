<?php

require __DIR__ . '/vendor/autoload.php';

define('APPPATH', 'src/');

$application = new App\Core\Application();
$application->run();