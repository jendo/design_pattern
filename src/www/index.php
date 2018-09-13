<?php
use App\App;
use Nette\DI\Container;

/** @var Container $container */
$container = require __DIR__ . '/../bootstrap.php';

/** @var App $app */
$app = $container->getService('application');
$app->run();
