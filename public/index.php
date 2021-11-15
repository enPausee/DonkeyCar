<?php
use App\Core\Router;
define('ROOT', dirname(__DIR__));
require ROOT .'/vendor/autoload.php';

$app = new Router;

$app->run();

