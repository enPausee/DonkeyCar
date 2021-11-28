<?php
// session
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

use App\Core\Router;

define('ROOT', dirname(__DIR__));
require ROOT . '/vendor/autoload.php';

$app = new Router;

$app->run();
