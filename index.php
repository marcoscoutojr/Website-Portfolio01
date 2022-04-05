<?php
ob_start();

require __DIR__."/vendor/autoload.php";

/*
 * :: BOOTSTRAP ::
 */

use CoffeeCode\Router\Router;

$router = new Router(url(),":");


/*
 * :: WEB ROUTES ::
 */
$router->namespace("Source\App");
$router->get("/","Web:home");



/*
 * :: ERROR ROUTES ::
 */
$router->group("/ops")->namespace("Source\App");
$router->get("/{errcode}", "Web:error");


 
    

/*
 * :: ROUTE ::
 */
$router->dispatch();


/*
 * :: ERROR REDIRECT ::
 */
if($router->error()){
    $router->redirect("/ops/{$router->error()}");
}

ob_end_flush();