<?php
use Nette\DI\Container;

/** @var Container $container */
$container = require __DIR__ . '/../src/bootstrap.php';

/** @var \MyApp\App\App $app */
$app = $container->getService('application');
$app->run();
