<?php

use App\Core\Router;

require __DIR__ . '/vendor/autoload.php';

session_start();

new Router();

Flight::start();
