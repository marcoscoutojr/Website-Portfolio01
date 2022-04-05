<?php
ob_start();

require __DIR__."/vendor/autoload.php";

/*
 * :: BOOTSTRAP ::
 */

use CoffeeCode\Router\Router;

$route = new Router(url(), ":");




ob_end_flush();
